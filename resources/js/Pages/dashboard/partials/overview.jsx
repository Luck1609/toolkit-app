import { LocationTick, Map1, Notification, Profile2User, Sms, TableDocument, UserOctagon, UserSearch, UserSquare } from "iconsax-react";

export default function OverviewCards({ data }) {

  console.log("stats", data)

  return (
    <>
      <div className="grid grid-cols-3 2xl:grid-cols-4 gap-5 p-8">
        {cards.map(({ label, icon, count, gradient, shadow }) => {
          return (
            <div
              key={label.replace(" ", "_")}
              className={`w-full p-5 flex items-center ${gradient} ${shadow} shadow-md rounded-lg text-white`}
            >
              <span className="p-5 rounded-full bg-white bg-opacity-[0.18]">
                {icon}
              </span>
              <p className="text-right w-full">
                <label
                  className={`font-bold block ${
                    label === "SMS Balance" &&
                    count === "Needs internet connection"
                      ? "text-sm"
                      : "text-xl"
                  }`}
                >
                  {count}
                </label>
                <label className="text-xl font-bold">{label}</label>
              </p>
            </div>
          );
        })}
      </div>
    </>
  );
}

const cards = [
  {
    count: 5,
    label: "Total Staff",
    icon: <Profile2User size={40} />,
    gradient: "bg-gradient-to-r from-rose-500 to-red-400",
    shadow: "shadow-rose-500/50",
  },
  {
    count: 7,
    label: "Received Applications",
    icon: <TableDocument size={40} className="opacity-50" />,
    gradient: "bg-gradient-to-r from-orange-500 to-yellow-400",
    shadow: "shadow-orange-500/50",
  },
  {
    count: 321,
    label: "SMS Balance",
    icon: <Sms size={40} className="opacity-50" />,
    gradient: "bg-gradient-to-r from-teal-500 to-emerald-400",
    shadow: "shadow-teal-500/50",
  },
  {
    count: 1,
    label: "Pending Notifications",
    icon: <Notification size={40} className="opacity-50" />,
    gradient: "bg-gradient-to-r from-blue-500 to-sky-400",
    shadow: "shadow-blue-500/50",
  },
  {
    count: 4,
    label: "TSC Members",
    icon: <UserOctagon size={40} className="opacity-50" />,
    gradient: "bg-gradient-to-r from-pink-500 to-purple-400",
    shadow: "shadow-pink-500/50",
  },
  {
    count: 7,
    label: "SPC Members",
    icon: <UserSquare size={40} className="opacity-50" />,
    gradient: "bg-gradient-to-r from-indigo-500 to-sky-400",
    shadow: "shadow-indigo-500/50",
  },
  {
    count: 14,
    label: "Total Localities",
    icon: <Map1 size={40} className="opacity-50" />,
    gradient: "bg-gradient-to-r from-green-500 to-teal-400",
    shadow: "shadow-green-500/50",
  },
  {
    count: 34,
    label: "Total Sectors",
    icon: <LocationTick size={40} className="opacity-50" />,
    gradient: "bg-gradient-to-r from-slate-500 to-slate-400",
    shadow: "shadow-slate-500/50",
  },
];
