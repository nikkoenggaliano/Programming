a = 10
b = 8
n = 0

for i in range(9):
	if i == 1:
		n += a
	n += b
final = ((a/2 * (a+n))*2)
print(final)