# Stephan has a friend who happens to be a little mechbird. Recently, he was trying to
# teach it how to speak basic language. Today the bird spoke its first word: "hieeelalaooo".
# This sounds a lot like "hello", but with too many vowels. Stephan asked Nikola for help
# and he helped to examine how the bird changes words. With the information they discovered,
# we should help them to make a translation module.

# The bird converts words by two rules:
# - after each consonant letter the bird appends a random vowel letter (l ⇒ la or le);
# - after each vowel letter the bird appends two of the same letter (a ⇒ aaa);
# Vowels letters == "aeiouy".

# You are given an ornithological phrase as several words which are separated by
# white-spaces (each pair of words by one whitespace). The bird does not know how to punctuate
# its phrases and only speaks words as letters. All words are given in lowercase. You should
# translate this phrase from the bird language to something more understandable.

# Input: A bird phrase as a string.
# Output: The translation as a string.

# Example:
# translate("hieeelalaooo") == "hello"
# translate("hoooowe yyyooouuu duoooiiine") == "how you doin"
# translate("aaa bo cy da eee fe") == "a b c d e f"
# translate("sooooso aaaaaaaaa") == "sos aaa"

# How it is used: This a similar cipher to those used by children when they invent their own
# "bird" language. Now you will be ready to crack the code.
# Precondition: re.match("\A([a-z]+\ ?)+(?<!\ )\Z", phrase)
# A phrase always has the translation.

# Start 19:50


# Подсчёт количества символов в строке
vowels_1 = "аоеуиыэяю"
phrase_1 = "Привет, как у тебя дела?"
print('Количество гласных = ', sum(letter in vowels_1 for letter in phrase_1))

a = 0
for letter in phrase_1:
    if letter in vowels_1:
        a += 1
print(a)


VOWELS = "aeiouy"


def translate(phrase):
    word_str = ''
    i = 0
    for el in phrase[:-2]:
        if i != 0 and el in VOWELS and phrase[i - 1] not in VOWELS:
            i += 1
        elif el in VOWELS and el == phrase[i + 1]:
            i += 1
        else:
            word_str += el
            i += 1
    print(word_str)

print(translate("hoooowe yyyooouuu duoooiiine"))

print(2 * '\n')


if __name__ == '__main__':
    print("Example:")
    print(translate("hieeelalaooo"))

    #These "asserts" using only for self-checking and not necessary for auto-testing
    assert translate("hieeelalaooo") == "hello", "Hi!"
    assert translate("hoooowe yyyooouuu duoooiiine") == "how you doin", "Joey?"
    assert translate("aaa bo cy da eee fe") == "a b c d e f", "Alphabet"
    assert translate("sooooso aaaaaaaaa") == "sos aaa", "Mayday, mayday"
    print("Coding complete? Click 'Check' to review your tests and earn cool rewards!")
