import ApplicationLogo from "@/Components/ApplicationLogo";
import Dropdown from "@/Components/Dropdown";
import NavLink from "@/Components/NavLink";
import { Link } from "@inertiajs/react";
import SideNav from "./partials/sidenav";

export default function AuthLayout({  header, children, data:{ auth: {user}, ...data } }) {

    console.log("user info", data)

  return (
    <div className="min-h-screen bg-gray-100 grid lg:grid-cols-12">
      <div className="lg:col-span-2">
        <SideNav pathname={data.ziggy} />
      </div>
      <div className="lg:col-span-10">
        <nav className="bg-white border-b border-gray-100 ">
          <div className="">
            <div className="flex justify-between h-16">
              <div className="flex">
                <div className="shrink-0 flex items-center">
                  <Link href="/">
                    <ApplicationLogo className="block h-9 w-auto fill-current text-gray-800" />
                  </Link>
                </div>

                <div className="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                  <NavLink href={"dashboard"} active={"dashboard"}>
                    Dashboard
                  </NavLink>
                </div>
              </div>


              <div className="hidden sm:flex sm:items-center sm:ms-6">
                <div className="ms-3 relative">
                  <Dropdown>
                    <Dropdown.Trigger>
                      <span className="inline-flex rounded-md">
                        <button
                          type="button"
                          className="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                        >
                          {user.firstname}

                          <svg
                            className="ms-2 -me-0.5 h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                          >
                            <path
                              fillRule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clipRule="evenodd"
                            />
                          </svg>
                        </button>
                      </span>
                    </Dropdown.Trigger>

                    <Dropdown.Content>
                      <Dropdown.Link href={"profile"}>
                        Profile
                      </Dropdown.Link>
                      <Dropdown.Link
                        href="logout"
                        method="post"
                        as="button"
                      >
                        Log Out
                      </Dropdown.Link>
                    </Dropdown.Content>
                  </Dropdown>
                </div>
              </div>

            </div>
          </div>

        </nav>

        {header && (
          <header className="bg-white shadow">
            <div className="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
              {header}
            </div>
          </header>
        )}

        <main>{children}</main>
      </div>
    </div>
  );
}
