alphabet = int(input("Введите '1' если eng, '2' если rus:\n"))
user_input = int(input("Введите номер буквы: "))

if alphabet == 1 and 1 <= user_input <= 26:
    print(f'под номером {user_input} находится буква - "{chr(user_input + 96)}"')
elif alphabet == 2 and 1 <= user_input <= 32:
    print(f'под номером {user_input} находится буква - "{chr(user_input + 1071)}"')
else: print("некоректный ввод")