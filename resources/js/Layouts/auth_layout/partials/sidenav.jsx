import React from "react";
import {
  ArchiveBox,
  Category,
  DocumentText,
  Map1,
  Profile2User,
  Setting2,
  Sms,
  TableDocument,
  User,
  UserOctagon,
} from "iconsax-react";
import NavLink from "@/Components/NavLink";

const Links = [
  {
    url: "/dashboard",
    icon: ({active}) => <Category className="mr-3" variant={active ? "Bold" : "Outline"} />,
    name: "Dashboard",
  },
  {
    icon: ({active}) => <TableDocument className="mr-3" variant={active ? "Bold" : "Outline"} />,
    name: "Applications",
    url: "/applications/received-applications",
  },
  {
    url: "/committee-members/tsc",
    icon: ({active}) => <UserOctagon className="mr-3" variant={active ? "Bold" : "Outline"} />,
    name: "Committee",
    match: "/committee-members",
  },
  {
    url: "/letters",
    icon: ({active}) => <DocumentText className="mr-3" variant={active ? "Bold" : "Outline"} />,
    name: "Letters",
  },
  {
    url: "/localities",
    icon: ({active}) => <Map1 className="mr-3" variant={active ? "Bold" : "Outline"} />,
    name: "Locality & Sectors",
  },
  {
    url: "/sms/sent-sms",
    icon: ({active}) => <Sms className="mr-3" variant={active ? "Bold" : "Outline"} />,
    name: "SMS",
  },
  {
    url: "/staff",
    icon: ({active}) => <Profile2User className="mr-3" variant={active ? "Bold" : "Outline"} />,
    name: "Staff",
  },
  {
    url: "/quarter",
    icon: ({active}) => <ArchiveBox className="mr-3" variant={active ? "Bold" : "Outline"} />,
    name: "Quarters",
  },
  {
    url: "/settings",
    icon: ({active}) => <Setting2 className="mr-3" variant={active ? "Bold" : "Outline"} />,
    name: "Settings",
  },
];

export default function SideNav({pathname: {url, location}}) {
  // const link = location.split(url);


  return (
    <div className="h-full flex flex-col bg-gray-600">
      <div className="w-full flex items-center justify-center h-44">
        <User size={50} className="text-white" />
      </div>

      <ul className="relative z-20 w-full">
        {Links.map(({ url, name, icon: Icon }) => {
          return (
            <li className="" key={url}>
              <NavLink
                key={name}
                className="w-full block my-1 text-white p-2"
                href={url}
                active={location.includes(url)}
              >
                <span
                  className={`flex items-center pl-5 ${location.includes(url) ? "font-medium" : ""}`}
                >
                  <Icon active={location.includes(url)} /> {name}
                </span>
              </NavLink>
            </li>
          );
        })}
      </ul>
    </div>
  );
}
