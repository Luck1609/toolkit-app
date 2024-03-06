import { Link } from '@inertiajs/react';

export default function NavLink({ active = false, className = '', children, ...props }) {
    return (
        <Link
            {...props}
            className={`${active ? "border-b-2" : ""} ${className}`
            }
        >
            {children}
        </Link>
    );
}
