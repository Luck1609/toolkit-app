import { Link } from "@inertiajs/react";
import me from "../../images/me.png"
import office from "../../images/office-block.png"

export default function Guest({ children, className }) {
  return (
    <div className="w-full flex flex-col items-center justify-center bg-slate-50 h-screen pb-8">
      <div>
        <Link href="/">
          <img src={me} alt="" className="h-32" />
        </Link>
      </div>

      <div className={className}>
        {children}
      </div>
    </div>
  );
}
