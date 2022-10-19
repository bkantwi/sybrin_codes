words = input("Enter your words: ")
def reverse_word(words, start, end):
	while start < end:
		words[start], words[end] = words[end], words[start]
		start = start + 1
		end -= 1

words = list(words)
start = 0
while True:
	
	try:
		end = words.index(' ', start)
		reverse_word(words, start, end - 1)
		start = end + 1

	except ValueError:
		reverse_word(words, start, len(words) - 1)
		break

words.reverse()
words = "".join(words)

print(words)

