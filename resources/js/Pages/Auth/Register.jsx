import GuestLayout from "@/Layouts/GuestLayout";
import TextInput from "@/Components/TextInput";
import { Head, useForm } from "@inertiajs/react";
import Btn from "@/Components/Btn";
import SelectField from "@/Components/Select";
import PasswordInput from "@/Components/PasswordInput";


const fields = [
  {
    label: "Firstname",
    name: "firstname",
    placeholder: "Enter your firstname",
  },
  {
    label: "Lastname",
    name: "lastname",
    placeholder: "Enter your lastname",
  },
  {
    label: "Title",
    name: "title",
    placeholder: "Enter your title",
    options: [
      { label: "Mr.", value: "Mr." },
      { label: "Dr.", value: "Dr." },
    ],
  },
  {
    label: "Email",
    name: "email",
    placeholder: "Enter your email",
  },
  {
    label: "Password",
    name: "password",
    placeholder: "Enter your password",
    type: "password",
  },
  {
    label: "Password confirmation",
    name: "password_confirmation",
    placeholder: "Repeat your password",
    type: "password",
  },
  {
    label: "Phone no.",
    name: "contact",
    placeholder: "Enter your phone number",
  },
];

export default function Office({ status, ...users }) {
  const { data, setData, post, processing, errors } = useForm({
    firstname: "",
    lastname: "",
    title: "",
    email: "",
    contact: "",
    password: "",
    password_confirmation: ""
  });

  const submit = (e) => {
    e.preventDefault();

    post("register");
  };

  const onChange = ({ target: { name, value } }) => {
    setData(name, value);
  };

  console.log("Current users", users)

  return (
    <GuestLayout className="w-full sm:max-w-sm md:max-w-2xl mt-6 px-6 py-4 bg-white shadow-md overflow-x-hidden sm:rounded-lg">
      <Head title="Log in" />

      {status && (
        <div className="mb-4 font-medium text-sm text-green-600">{status}</div>
      )}

      <h4 className="text-xl font-semibold mb-5 text-center">
        Officer Registration
      </h4>

      <form onSubmit={submit} className="grid md:grid-cols-2 gap-x-5 gap-y-5 ">

        {
          fields.map(({ label, name, placeholder, options, type }) => (
            options ? (
              <SelectField
                name={name}
                label={label}
                change={onChange}
                errors={errors}
                value={data?.district}
                options={options}
                key={label}
              />
            ) : (
              type === "password" ? (
                <PasswordInput
                  key={label}
                  id={name}
                  name={name}
                  label={label}
                  placeholder={placeholder}
                  className="w-full mt-1"
                  onChange={onChange}
                />
              ) : (
                <TextInput
                  id={name}
                  name={name}
                  value={data[name]}
                  className="mt-1 block w-full"
                  autoComplete={name}
                  label={label}
                  placeholder={placeholder}
                  onChange={onChange}
                  key={label}
                />
              )
            )
          ))
        }


        <div className="md:col-span-2">
          <Btn
            className="p-3 bg-black text-white rounded w-3/6 mx-auto block"
            type="submit"
            disabled={processing}
            loading={processing}
          >
            Register
          </Btn>
        </div>
      </form>
    </GuestLayout>
  );
}
