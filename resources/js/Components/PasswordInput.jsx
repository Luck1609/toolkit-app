import { forwardRef, useEffect, useRef, useState } from "react";
import InputLabel from "./InputLabel";
import InputError from "./InputError";
import { Eye, EyeSlash } from "iconsax-react";


const iconStyle = "absolute right-2 bottom-3 text-slate-400 z-1 cursor-pointer";

export default forwardRef(function TextInput(
  { className = "", isFocused = false, label, errors, ...props },
  ref
) {
  const input = ref ? ref : useRef();
  const [show, setShow] = useState(false)

  useEffect(() => {
    if (isFocused) {
      input.current.focus();
    }
  }, []);

  const toggle = () => setShow(!show)

  return (
    <div className="relative">
      <InputLabel
        htmlFor={props.name}
        value={label}
        className="text-sm text-slate-400"
      />
      <input
        {...props}
        type={show ? "text" : "password"}
        className={
          "border-gray-300 rounded shadow-sm p-3 " +
          className
        }
        ref={input}
      />

      {!show ? (
        <Eye className={iconStyle} onClick={toggle} />
      ) : (
        <EyeSlash className={iconStyle} onClick={toggle} />
      )}

      <InputError
        message={errors?.[props.name]}
        className="text-red-500 text-xs"
      />
    </div>
  );
});
