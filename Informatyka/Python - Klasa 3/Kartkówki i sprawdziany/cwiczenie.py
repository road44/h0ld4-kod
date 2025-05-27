pauza ="----------------------"

# 1 stwórz liste któa ma 4 elemenety z czego dwa to integret i dwa typu fload

filip =[6,2, 5.6, 8.1]
print(filip)
print(pauza)
# 2. dodaj na początek jakąś nową wartość
filip.insert(0, 999)
print(filip)
print(pauza)

# 3 usuwanie ostatni element z listy
filip.pop()
print(filip)
print(pauza)

# 4. posortuj liste
filip.sort()
print(filip)
print(pauza)

# 5 tą liste konwertuj na krotke
filip_krotka = tuple(filip)
print(filip_krotka)
print(pauza)

# 6 wyświetl najwyższą wartość krotki
print(max(filip_krotka))
print(pauza)
# 7. konwertsuj krotke na liste
filip_lista = list(filip_krotka)
print(filip_lista)
print(pauza)
# 8. dodaj na koniec listy nowy element typu string
filip_lista.append("holdyk")
print(filip_lista)
print(pauza)
# 9. tworzycie słownik który nazywa się szkola. słownik ma dwie pary: nazwa:zspm, druga para: typ: technikum
szkola = {
    "nazwa": "zspm",
    "typ": "technikum"
}
print(szkola)
print(pauza)
# 10. do tego słownika dodaj nową pare: miasto:katowice
szkola["miasto"] = "katowice"
print(szkola)
print(pauza)
# 11. zwróc ze słownika tylko wartości
szkola_wartosci = szkola.values()
print(szkola_wartosci)
print(pauza)