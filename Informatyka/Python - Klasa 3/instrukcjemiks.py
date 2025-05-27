pauza="------------------------------"

txt = "Python-ćwiczenia"

print(f"Sprawdzamy typ zmiennej {type(txt)}")


for sign in txt:
    print(f"Znak {sign} ma wartość ASCII= {ord(sign)}")

# pętla przjdzie przez każdy pojedynczy znak w zmiennej txt
# funkcja ORD pokazuja jaka wartośc ma znak w kodzie ascii

print(pauza)


tekst="python"
dl = len(tekst)
print(f"długośc tekstu {tekst} to {dl} znaków")
print(f"indeksy od 0 do {dl-1}")

print(pauza)
for nr in range(0, dl): 
    litera = tekst[nr]
    print(f"Litera o indeksie {nr} to {litera}")

print(pauza)