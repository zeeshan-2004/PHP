/*
https://www.php.net/manual/en/function.date.php 

impotant functions 

| **Function**                  | **Description**                                  | **Example Usage / Value**                                 |
| ----------------------------- | ------------------------------------------------ | --------------------------------------------------------- |
| `date()`                      | Formats a local date/time                        | `date("Y-m-d")` → `2025-07-13`                            |
| `time()`                      | Returns current Unix timestamp                   | `time()` → `1752380987`                                   |
| `strtotime()`                 | Converts a string into a Unix timestamp          | `strtotime("next Monday")` → `1752960000`                 |
| `mktime()`                    | Gets Unix timestamp from date/time               | `mktime(0, 0, 0, 7, 13, 2025)` → `1752364800`             |
| `date_default_timezone_set()` | Sets default timezone                            | `date_default_timezone_set("Asia/Kolkata")`               |
| `date_default_timezone_get()` | Gets default timezone                            | `date_default_timezone_get()` → `"UTC"`                   |
| `getdate()`                   | Returns array with date/time info                | `getdate()` → `['year'=>2025, 'mon'=>7, 'mday'=>13, ...]` |
| `checkdate()`                 | Validates a Gregorian date                       | `checkdate(2, 29, 2025)` → `false`                        |
| `gmdate()`                    | Formats a GMT/UTC date/time                      | `gmdate("Y-m-d H:i:s")` → `2025-07-13 12:34:56`           |
| `microtime()`                 | Returns current Unix timestamp with microseconds | `microtime(true)` → `1752380987.1234`                     |

*/

day,date,year presentation

| Format | Meaning               | Example  | Memory Trick               |
| ------ | --------------------- | -------- | -------------------------- |
| `Y`    | Full year (4 digits)  | `2025`   | **Y**ear full              |
| `y`    | Short year (2 digits) | `25`     | **y**ear small             |
| `m`    | Month (01)            | `07`     | **m**onth number           |
| `n`    | Month (1, no 0)       | `7`      | **n**o leading zero month  |
| `F`    | Full month name       | `July`   | **F**ull month             |
| `M`    | Short month name      | `Jul`    | **M**ini month             |
| `d`    | Day (01)              | `13`     | **d**ay double-digit       |
| `j`    | Day (1, no 0)         | `13`     | **j**ust the day (no zero) |
| `D`    | Day short name        | `Sun`    | **D**ay 3-letter           |
| `l`    | Full day name         | `Sunday` | "**L**ong day name"        |
S - st, nd,rd,th suffix for the day  Works well with j


time presentation

| Format | Meaning         | Example | Memory Trick                    |
| ------ | --------------- | ------- | ------------------------------- |
| `H`    | 24-hour (00)    | `14`    | **H**our military               |
| `h`    | 12-hour (01)    | `02`    | **h**our civil                  |
| `i`    | Minutes (00-59) | `45`    | "**i** looks like minute stick" |
| `s`    | Seconds (00-59) | `07`    | **s**econds                     |
| `a`    | am or pm        | `pm`    | **a**m/pm                       |
| `A`    | AM or PM        | `PM`    | **A**M/PM caps                  |


"Y-m-d H:i:s" → most common full datetime format
echo date("Y-m-d H:i:s");
// Output: 2025-07-13 14:45:08


