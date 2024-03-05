import { Loading } from "./Loader";

const Btn = ({ children, type = "button", disabled = false, className, loading }) => {
  return (
    <button className={className} type={type} disabled={disabled}>
      {loading ? <Loading txt="Please wait..." /> : children}
    </button>
  );
};

export default Btn;
