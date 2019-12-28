date = "10-05-1915"

number, month, year = date.split('-')

print(number, month, year)



f'День - ok' if 1 <= int(number) <= 31 else f'День не прошёл валидацию'
