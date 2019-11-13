'''You prefer a good old 12-hour time format. But the modern world we live in would
rather use the 24-hour format and you see it everywhere. Your task is to convert 
the time from the 24-h format into 12-h format by following the next rules:
- the output format should be 'hh:mm a.m.' (for hours before midday) or 'hh:mm p.m.'
(for hours after midday)
- if hours is less than 10 - don't write a '0' before it. For example: '9:05 a.m.'
Here https://en.wikipedia.org/wiki/12-hour_clock  you can find some useful
information about the 12-hour format.

Input: Time in a 24-hour format (as a string).
Output: Time in a 12-hour format (as a string).
Precondition:
'00:00' <= time <= '23:59'  '''


def time_converter(time):
    hh, mm = time.split(":")
    if int(hh) > 12:
        time = str(int(hh) - 12) + ":" + mm + " p.m."
        return time
    elif int(hh) == 12:
        time = hh + ":" + mm + " p.m."
        return time
    elif int(hh) == 24:
        time = "00:" + str(mm) + " p.m."
        return time
    elif int(hh) == 00:
        time = "12:" + str(mm) + " a.m."
        return time
    else:
        time = str(int(hh)) + ":" + str(mm) + " a.m."
        return time
print(time_converter("09:30"))
