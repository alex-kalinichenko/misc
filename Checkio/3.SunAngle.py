'''  Your task is to find the angle of the sun above the horizon knowing the
time of the day. Input data: the sun rises in the East at 6:00 AM, which
corresponds to the angle of 0 degrees. At 12:00 PM the sun reaches its zenith,
which means that the angle equals 90 degrees. 6:00 PM is the time of the sunset
so the angle is 180 degrees. If the input will be the time of the night
(before 6:00 AM or after 6:00 PM), your function should return - "I don't see
the sun!".'''

time = "12:15"
#if 6 <= float(time[:2]) <= 18:
num_mins = float(time[:2]) * 60 + float(time[3:5]) - 360
if 0 <= num_mins <= 720:
    angle = round(num_mins * 180 / 720, 2)
    print(angle)
else:
    print("I don't see the sun!")


# в виде функции

def sun_angle(time):
#    if 6 <= float(time[:2]) <= 18:
    num_mins = float(time[:2]) * 60 + float(time[3:5]) - 360
    if 0 <= num_mins <= 720:
        angle = round(num_mins * 180 / 720, 2)
        return angle
    else:
        return "I don't see the sun!"
print(sun_angle("12:15"))

# ещё способ
def sun_angle(time):
    hours, minutes = time.split(":")
    total_hours = int(hours) + int(minutes) / 60

    if 6.0 <= total_hours <= 18.0:
        return (total_hours - 6) * 15
    else:
        return "I don't see the sun!"
print(sun_angle("12:15"))