words = input("Enter your words: ")
def reverse_word(words, first, last):
	while first < last:
		words[first], words[last] = words[last], words[first]
		first = first + 1
		last -= 1

words = list(words)
first = 0
while True:
	
	try:
		last = words.index(' ', first)
		reverse_word(words, first, last - 1)
		first = last + 1

	except ValueError:
		reverse_word(words, first, len(words) - 1)
		break

words.reverse()
words = "".join(words)

print(words)

