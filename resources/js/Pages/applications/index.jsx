import React from "react";

import MaterialTable, { MTableToolbar } from "@material-table/core";
import UISelect from "@/Components/UISelect";
import AuthLayout from "@/Layouts/auth_layout";


export default function Applicaions({quarter, settings, applications, ...data}) {

  console.log("Application list", applications)

  return (
    <AuthLayout data={data}>
      <div className="w-11/12 mx-auto pt-10">

        <MaterialTable
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
          ]}
          isLoading={Boolean(!applications)}
          data={applications?.data ?? []}
          actions={[
            {
            },
          ]}
          components={{
            Toolbar: (props) => (
              <div className="w-full flex justify-between p-3">
                <UISelect
                  className="w-44"
                  options={[
                    {
                      label: "Approved applications",
                      value: "approved"
                    },
                    {
                      label: "Deferred applications",
                      value: "deferred"
                    },
                    {
                      label: "Received applications",
                      value: "received"
                    },
                    {
                      label: "Recommended applications",
                      value: "recommended"
                    }
                  ]}
                  baseUrl="Received applications"
                  apiUrl={"applications"}
                />

                <div className="flex grow">
                  <div className="grow">
                    <MTableToolbar {...props} />
                  </div>
                </div>
              </div>
            )
          }}
        />
      </div>
    </AuthLayout>
  );
};
