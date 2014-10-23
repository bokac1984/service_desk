select * from zahtjevi_za_izdavanje where vdoc_sifra = 'P' and stzh_sifra = 'F' order by datum desc;

select * from zahtjevi_za_izdavanje where osb_jmb = 2506952114997;

select * from sif_admin.statusi_zahtjeva;

select stzh_sifra from zahtjevi_za_izdavanje where broj = 'P-14080-14';

--1908976179353
update zahtjevi_za_izdavanje set osb_jmb_preuzima = '1908976179353' where broj='P-500906-14';