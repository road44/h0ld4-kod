select k.imie, count(z.id_zamowienia) from klienci k join zamowienia z on k.id_klienta=z.id_klienta group by k.nazwisko order by count(z.id_zamowienia) asc;

select k.nazwisko, p.nazwa_produktu, pz.ilosc, p.cena from klienci k join zamowienia z on k.id_klienta=z.id_klienta join pozycjezamowienia pz on z.id_zamowienia=pz.id_zamowienia join produkty p on pz.id_produktu=p.id_produktu order by z.data_zamowienia asc;

select p.kategoria, sum(pz.ilosc*p.cena) as cena_lacznie from produkty p join pozycjezamowienia pz on pz.id_produktu=p.id_produktu join zamowienia z on z.id_zamowienia=pz.id_zamowienia where z.status not like 'anulowane' group by p.kategoria order by cena_lacznie desc;

select k.miasto, count(z.id_zamowienia) as iloscZamowien from klienci k join zamowienia z on z.id_klienta=k.id_klienta where z.status like 'Zrealizowane' group by k.miasto order by iloscZamowien desc;


select distinct(k.nazwisko) from klienci k join zamowienia z on k.id_klienta=z.id_klienta join pozycjezamowienia pz on pz.id_zamowienia=z.id_zamowienia join produkty p on p.id_produktu=pz.id_produktu where p.kategoria like 'elektronika' and z.status like 'zrealizowane';