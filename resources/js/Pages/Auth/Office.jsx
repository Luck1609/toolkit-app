import Checkbox from '@/Components/Checkbox';
import GuestLayout from '@/Layouts/GuestLayout';
import TextInput from '@/Components/TextInput';
import { Head, Link, useForm } from '@inertiajs/react';
import Btn from '@/Components/Btn';
import SelectField from '@/Components/Select';


export default function Office({ status, canResetPassword }) {
    const { data, setData, post, processing, errors } = useForm({
      region: "",
      district: "",
      initials: "",
      shelves: "",
    });


    const submit = (e) => {
        e.preventDefault();

        post(route('office-registration'));
    };


    const onChange = ({ target: { name, value } }) => {
      setData(name, value);
    }

    return (
      <GuestLayout className="w-full sm:max-w-sm md:max-w-2xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <Head title="Log in" />

        {status && (
          <div className="mb-4 font-medium text-sm text-green-600">
            {status}
          </div>
        )}

        <h4 className="text-xl font-semibold mb-5 text-center">
          Office Registration
        </h4>

        <form onSubmit={submit} className="space-y-5">
          <div className="grid md:grid-cols-2 gap-5">
            <SelectField
              name="region"
              label="Region"
              errors={errors}
              value={data?.region}
              onChange={onChange}
              options={[
                {
                  label: "Bono region",
                  value: "bono",
                },
                {
                  label: "Bono east region",
                  value: "bono east",
                },
                {
                  label: "Ashanti region",
                  value: "ashanti",
                },
              ]}
            />

            <SelectField
              name="district"
              label="District"
              onChange={onChange}
              errors={errors}
              value={data?.district}
              options={[
                {
                  label: "Berekum municipal",
                  value: "berekum",
                },
                {
                  label: "Bono east region",
                  value: "bono east",
                },
                {
                  label: "Ashanti region",
                  value: "ashanti",
                },
              ]}
            />
          </div>

          <div className="grid md:grid-cols-2 gap-5">
            <TextInput
              id="initials"
              name="initials"
              value={data.initials}
              className="mt-1 block w-full"
              autoComplete="initials"
              label="Initials"
              placeholder="Enter your office initials"
              onChange={onChange}
            />

            <TextInput
              id="shelves"
              name="shelves"
              value={data.shelves}
              className="mt-1 block w-full"
              autoComplete="shelves"
              label="Shelves"
              placeholder="No. of shelves"
              onChange={onChange}
            />
          </div>

          <Btn
            className="p-3 bg-black text-white rounded w-3/6 mx-auto block"
            type="submit"
            disabled={processing}
            loading={processing}
          >
            Login
          </Btn>
        </form>
      </GuestLayout>
    );
}
