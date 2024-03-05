import {
  MenuItem,
  Select,
  FormControl,
  FormHelperText,
} from "@mui/material";
import InputLabel from "./InputLabel";

const SelectField = ({
  name,
  options,
  label,
  className,
  errors,
  value,
  variant = "outlined",
}) => {

  const error = errors[name];


  return (
    <div className={`${errors ? "error" : ""}`}>
      <InputLabel value={label} />
      <FormControl className="w-full" error={error} variant={variant}>
        <Select
          id={name}
          value={value}
          label={label}
          error={error ? true : false}
          className={`${className}`}
        >
          <MenuItem value="">
            {label}
          </MenuItem>
          {options.map(({ value, label }, index) => {
            return (
              <MenuItem key={index.toString()} value={value ?? label}>
                {label}
              </MenuItem>
            );
          })}
        </Select>
        {error && <FormHelperText>{error.message}</FormHelperText>}
      </FormControl>
    </div>
  );
};

export default SelectField;
