pauza="-------------------------------------------"
# 1
owoce = ['kiwi', 'arbuz', 'jabłko', 'cytryna']
# 2
owoce.append('banan')
# 3
owoce[0] = 'truskawka'
# 4
owoce.insert(3, 'maliny')
# 5
print(owoce[4])
print(owoce.index('cytryna'), 'grzyb')
# 6
owoce.pop()
# 7
warzywa = ('marchewka', 'kalafior', 'ogórek')
# 8
print(len(warzywa))
# 9
jarzyny = list(warzywa)
print(jarzyny)
# 10
wszystko = owoce + jarzyny
print(wszystko)
print(pauza)
# 11
wszystko.sort()
print(wszystko)
print(pauza)
# 12
mix = tuple(wszystko)
print(mix)