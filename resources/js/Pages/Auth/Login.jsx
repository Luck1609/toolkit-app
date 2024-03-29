import { useEffect } from 'react';
import Checkbox from '@/Components/Checkbox';
import GuestLayout from '@/Layouts/GuestLayout';
import TextInput from '@/Components/TextInput';
import { Head, Link, useForm } from '@inertiajs/react';
import Btn from '@/Components/Btn';
import PasswordInput from '@/Components/PasswordInput';

export default function Login({ status, ...users }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: '',
        password: '',
        remember: false,
    });

    useEffect(() => {
        return () => {
            reset('password');
        };
    }, []);

    const submit = (e) => {
        e.preventDefault();

        post(route('login'));
    };

    console.log("Available users", users, errors)

    return (
      <GuestLayout className="w-full sm:max-w-sm mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <Head title="Log in" />

        {status && (
          <div className="mb-4 font-medium text-sm text-green-600">
            {status}
          </div>
        )}

        <h4 className="text-xl font-semibold mb-5 text-center">Staff Login</h4>

        <form onSubmit={submit} className="space-y-5">
          <div>
            <TextInput
              id="email"
              type="email"
              name="email"
              value={data.email}
              className="mt-1 block w-full"
              autoComplete="username"
              label="Email"
              placeholder="Enter your email address"
              isFocused={true}
              errors={errors}
              onChange={(e) => setData("email", e.target.value)}
            />
          </div>

          <PasswordInput
            id="password"
            type="password"
            name="password"
            value={data.password}
            className="mt-1 block w-full"
            autoComplete="current-password"
            label="Password"
            errors={errors}
            placeholder="Enter your password"
            onChange={(e) => setData("password", e.target.value)}
          />

          <div className="flex items-center justify-between">
            <div className="block mt-4">
              <label className="flex items-center">
                <Checkbox
                  name="remember"
                  checked={data.remember}
                  onChange={(e) => setData("remember", e.target.checked)}
                />
                <span className="ms-2 text-sm text-gray-600">Remember me</span>
              </label>
            </div>

            {/* <div className="flex items-center justify-end mt-4">
              {canResetPassword && (
                <Link
                  href={route("password.request")}
                  className="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                  Forgot your password?
                </Link>
              )}
            </div> */}
          </div>

          <Btn
            className="p-3 bg-black text-white rounded w-4/5 mx-auto block"
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
