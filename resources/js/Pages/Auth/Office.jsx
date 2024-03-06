import GuestLayout from "@/Layouts/GuestLayout";
import TextInput from "@/Components/TextInput";
import { Head, Link, useForm } from "@inertiajs/react";
import Btn from "@/Components/Btn";
import SelectField from "@/Components/Select";
import Helper from "@/helper";
import { useCallback } from "react";


const { filterValues } = Helper;

export default function Office({ regions, status }) {
  const { data, setData, post, processing, errors } = useForm({
    region: "",
    district: "",
    initials: "",
    shelves: "",
  });

  const submit = (e) => {
    e.preventDefault();

    post("office-registration");
  };

  const onChange = ({ target: { name, value } }) => setData(name, value);

  const showDistricts = () => {
    if (data.region) {
      return regions.filter(({id}) => id === data.region)[0].towns
    }
  }

  const districts = useCallback(showDistricts(), [data.region]);

  return (
    <GuestLayout className="w-full sm:max-w-sm md:max-w-2xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
      <Head title="Log in" />

      {status && (
        <div className="mb-4 font-medium text-sm text-green-600">{status}</div>
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
            change={onChange}
            options={filterValues({
              options: regions,
              param: { label: "name", value: "id" },
            })}
          />

          <SelectField
            name="district"
            label="District"
            change={onChange}
            errors={errors}
            value={data?.district}
            options={filterValues({
              options: districts ?? [],
              param: { label: "name", value: "id" },
            })}
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
            type="number"
            onChange={onChange}
          />
        </div>

        <Btn
          className="p-3 bg-black text-white rounded w-3/6 mx-auto block"
          type="submit"
          disabled={processing}
          loading={processing}
        >
          Create
        </Btn>
      </form>
    </GuestLayout>
  );
}
