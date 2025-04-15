import calendar
from datetime import datetime

# Pobranie aktualnego roku i miesiąca
teraz = datetime.now()
rok = teraz.year
miesiac = teraz.month

# Wyświetlenie kalendarza dla bieżącego miesiąca
print(calendar.month(rok, miesiac))