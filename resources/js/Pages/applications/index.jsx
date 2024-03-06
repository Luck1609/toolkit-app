import React from "react";

// import Tooltip from '@mui/material/Tooltip';
import { useDispatch } from "react-redux";
import { withRouter } from "react-router";
import MTable from "components/mtable";
import Icons from "pages/inc/icons";
import PermitForm from "./forms/permit_form";
import DetailsPanel from "./shared/details_panel";
import { Btn } from "components/btn";
import { MTableToolbar } from "@material-table/core";
import ReceivedAppsComponents from "./widgets/received_app_components";
import useSWR from "swr";
import CustomMenu from "components/menu";
import CustomTooltip, { TooltipComponent } from "components/tooltip";
import { appModal, showModal, showNotice } from "redux/types";
import Helper from "helpers";
import useAPIContext from "hooks/api_context";
import DeclineReason from "./forms/decline_reason";
import {
  decline_reason_validation,
  permit_number_validation,
} from "./validations";
import MeetingPrep from "./widgets/meeting_prep";
import EndSessionToolbar from "./widgets/end_session_toolbar";
import PermitNumberForm from "./forms/permit_number_form";

const { isJsonString } = new Helper();

export default withRouter(function Permit({
  history: {
    location: { pathname },
  },
}) {
  const { data: quarter } = useSWR("current-quarter");
  // const { data: end_session } = useSWR('current-quarter/status');
  const { data: settings } = useSWR("current-settings/applications");
  const { data: applications } = useSWR(pathname.slice(1));
  const { makeRequest } = useAPIContext();

  const dispatch = useDispatch();

  // const update_application = (id) => {

  // }

  const options = settings?.data ? JSON.parse(settings?.data.options) : null;

  const show_scheduler = options?.filter(
    (setting) =>
      setting.label === "Show meeting scheduler after first application entry"
  )[0];
  const manual_permit_numbers = options?.filter(
    (setting) => setting.label === "Manually assign permit numbers"
  )[0];

  const meeting_decision = ({ id, action }) => {
    console.log("meeting decision", action);
    makeRequest({
      method: "patch",
      url: `application/${id}`,
      payload: { action },
      mutation: pathname.slice(1),
    });
  };

  const format_declined = (id) => {
    dispatch(
      showModal({
        title: "Reason for Declining Application",
        content: DeclineReason,
        validation: decline_reason_validation,
        method: "patch",
        mutate_url: pathname.slice(1),
        url: `application/${id}`,
        values: {
          action: "defer",
          comment: "",
        },
      })
    );
  };

  const format_decision = ({ id, firstname, title, lastname, action }) => {
    return {
      title: `${new Helper().ucwords(action)} application`,
      content: (
        <div className="leading-9">
          You have chosen to {action} the application for {title} {lastname}{" "}
          {firstname}.
          <span className="font-semibold ml-0.5 text-red-500 block">
            Do you want to continue with this action?
          </span>
        </div>
      ),
      btn: (
        <span className="flex items-center">
          Contiue action <Icons.Plane size={18} className="ml-1" />
        </span>
      ),
      action: () =>
        action !== "defer"
          ? meeting_decision({ id, action })
          : format_declined(id),
    };
  };

  // console.log('Settings data', settings?.data);

  return (
    <div className="w-11/12 mx-auto pt-10">
      <EndSessionToolbar quarter={quarter?.data} settings={settings?.data} />
      <MeetingPrep
        quarter={quarter?.data}
        applications={applications?.data}
        settings={settings?.data}
        show_scheduler={show_scheduler}
      />

      <MTable
        title=""
        selectable={false}
        showTextRowsSelected={false}
        columns={[
          {
            title: "Name",
            field: "name",
            render: (props) => <>{`${props.firstname} ${props.lastname}`}</>,
          },
          { title: "Contact", field: "contact" },
          {
            title: "Locality",
            render: ({ locality }) => <>{locality?.name}</>,
          },
          {
            title: "Sector",
            render: ({ sector }) => <>{sector?.name}</>,
          },
          { title: "Block", field: "block" },
          { title: "Plot", field: "plot" },
          // {
          //   title: 'Use',
          //   field: 'use' ,
          //   // render: ({ use }) => <div className="w-full grid grid-cols-1 gap-2">{JSON.parse(use).map(label => <Chip key={label} label={label} />)}</div>
          //   render: (use) => <div className="w-full grid grid-cols-1 gap-2">{console.log('type of use', use)}</div>
          // }
        ]}
        isLoading={Boolean(!applications)}
        data={applications?.data ?? []}
        actions={[
          {
            icon: "",
            tooltip: "Defer application",
          },
        ]}
        components={{
          Toolbar: (props) => (
            <div className="w-full flex justify-between p-3">
              <CustomMenu
                options={[
                  "Approved applications",
                  "Deferred applications",
                  "Received applications",
                  "Recommended applications",
                ]}
                baseUrl="Received applications"
                apiUrl={"applications"}
              />

              <div className="flex grow">
                <div className="grow">
                  <MTableToolbar {...props} />
                </div>

                <div className="flex items-center">
                  <ReceivedAppsComponents quarter={quarter?.data} />
                </div>
              </div>
            </div>
          ),
          // Action: ({ data }) => (
          //   <>
          //     <div className="w-full flex">
          //       {quarter?.data.finalized ? (
          //         <>
          //           {/* Hide actions if the current view is deferred applications */}
          //           {pathname.slice(1) !==
          //           "applications/deferred-applications" ? (
          //             <>
          //               {pathname.slice(1) !==
          //                 "applications/recommended-applications" ||
          //               (pathname.slice(1) ===
          //                 "applications/recommended-applications" &&
          //                 quarter?.data.spc.date) ? (
          //                 <>
          //                   <CustomTooltip
          //                     Component={TooltipComponent}
          //                     data={data}
          //                     title={
          //                       pathname.slice(1) ===
          //                       "applications/received-applications"
          //                         ? "Recommend application"
          //                         : "Approve application"
          //                     }
          //                     content={({ data }) => (
          //                       <Btn
          //                         content={<Check />}
          //                         className="btn rounded-full  p-2 bg-transparent hover:bg-black hover:bg-opacity-10 shadow-none hover:shadow-none text-green-500"
          //                         click={() =>
          //                           dispatch(
          //                             manual_permit_numbers.value
          //                               ? showModal({
          //                                   title: "Add Permit Numbers",
          //                                   content: PermitNumberForm,
          //                                   url: `application/${data.id}`,
          //                                   method: "patch",
          //                                   validation:
          //                                     permit_number_validation,
          //                                   mutate_url: `applications/${pathname.slice(
          //                                     1
          //                                   )}`,
          //                                 })
          //                               : showNotice(
          //                                   format_decision({
          //                                     id: data.id,
          //                                     firstname: data.firstname,
          //                                     lastname: data.lastname,
          //                                     title: data.title,
          //                                     action:
          //                                       pathname.slice(1) ===
          //                                       "applications/received-applications"
          //                                         ? "recommend"
          //                                         : "approve",
          //                                   })
          //                                 )
          //                           )
          //                         }
          //                       />
          //                     )}
          //                   />
          //                 </>
          //               ) : (
          //                 <></>
          //               )}
          //               {pathname.slice(1) !==
          //               "applications/recommended-applications" ? (
          //                 <CustomTooltip
          //                   Component={TooltipComponent}
          //                   data={data}
          //                   title="Defer application"
          //                   content={({ data }) => (
          //                     <Btn
          //                       content={<Icons.Ban />}
          //                       className="btn rounded-full  p-2 bg-transparent hover:bg-black hover:bg-opacity-10 shadow-none hover:shadow-none text-red-500"
          //                       click={() =>
          //                         dispatch(
          //                           showNotice(
          //                             format_decision({
          //                               id: data.id,
          //                               firstname: data.firstname,
          //                               lastname: data.lastname,
          //                               title: data.title,
          //                               action: "defer",
          //                             })
          //                           )
          //                         )
          //                       }
          //                     />
          //                   )}
          //                 />
          //               ) : null}
          //             </>
          //           ) : null}
          //         </>
          //       ) : (
          //         <>
          //           <CustomTooltip
          //             Component={TooltipComponent}
          //             data={data}
          //             title="Edit application"
          //             content={({ data }) => (
          //               <Btn
          //                 content={<Icons.Edit />}
          //                 className="btn rounded-full  p-2 bg-transparent hover:bg-black hover:bg-opacity-10 shadow-none hover:shadow-none text-blue-500"
          //                 click={() =>
          //                   dispatch(
          //                     appModal({
          //                       firstname: data.firstname,
          //                       lastname: data.lastname,
          //                       title: data.title,
          //                       contact: data.contact,
          //                       shelf: data.shelf,
          //                       locality_id: data.locality_id,
          //                       sector_id: data.sector_id,
          //                       block: data.block,
          //                       plot: data.plot,
          //                       type: data.type,
          //                       height: data.height,
          //                       use: isJsonString(data.use)
          //                         ? JSON.parse(data.use)
          //                         : data.use,
          //                       existing: data.existing,
          //                     })
          //                   )
          //                 }
          //               />
          //             )}
          //           />
          //         </>
          //       )}
          //     </div>
          //   </>
          // ),
        }}
        detailPanel={[
          {
            tooltip: "Show Details",
            icon: Icons.ChevronRight,
            render: ({ rowData }) => {
              console.log("Selected row data", rowData);
              return <DetailsPanel data={rowData} />;
            },
          },
        ]}
      />
      <PermitForm />
    </div>
  );
});
