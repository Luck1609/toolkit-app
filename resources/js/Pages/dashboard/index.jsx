
import AuthLayout from "@/Layouts/auth_layout"
import OverviewCards from "./partials/overview"

const Dashboard = ({data, ...props}) => {

  return (
    <AuthLayout data={props}>
      <OverviewCards data={data} />
    </AuthLayout>
  )
}

export default Dashboard
