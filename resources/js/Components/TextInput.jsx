import { forwardRef, useEffect, useRef } from "react";
import InputLabel from "./InputLabel";
import InputError from "./InputError";

export default forwardRef(function TextInput(
  { type = "text", className = "", isFocused = false, label, errors, ...props },
  ref
) {
  const input = ref ? ref : useRef();

  useEffect(() => {
    if (isFocused) {
      input.current.focus();
    }
  }, []);

  return (
    <div className="relative">
      <InputLabel htmlFor={props.name} value={label} className="text-sm text-slate-400" />
      <input
        {...props}
        type={type}
        className={
          "border-gray-300  rounded shadow-sm p-3 " +
          className
        }
        ref={input}
      />
      <InputError message={errors?.[props.name]} className="text-red-500 text-xs" />
    </div>
  );
});
