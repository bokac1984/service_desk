select * from istorije_paketa where pkt_broj = '0LL1110100062'; -- D
select * from istorije_paketa where pkt_broj = '0LA1110100062' order by sekvenca desc; -- C

select * from paketi where pkt_vpk_sifra = 'D' and orgj_sifra_za = 158;


select * from paketi where broj = '11361705110124';
select * from paketi where broj = '0LA1110100062';

select * from istorije_dokumenata where pkt_broj = '0LA1110100062';

delete from istorije_paketa where pkt_broj = '0LA1110100062' and stpk_sifra = 'N';

--UPDATE paketi set orgj_sifra_za = 158 where broj = '11361705110124';

delete from istorije_dokumenata 
where pkt_broj = '0LA1110100062' 
and iddoc_broj <> 'AA016750' ;

select * from istorije_dokumenata where iddoc_broj = 'AA016750';

select * from 

update istorije_dokumenata set stdoc_sifra = 'P' where iddoc_broj = 'AA016750';
--update istorije_paketa set stpk_sifra = 'T' where pkt_broj = '0LA1110100062';

--update paketi set orgj_sifra_za = 158 where broj = '0LL1110100062';
select * from statusi_paketa;

select * from dokumenti order by datum_izdavanja desc;

select ip.* from istorije_paketa ip order by datum desc;

select * from statusi_dokumenata;

-- daj sve brojeve paketa koji imaju u istroji dokumenata za pasose
select p.broj, p.vpk_sifra, iddoc.iddoc_broj, ddoc.stdoc_sifra from paketi p
left join istorije_dokumenata iddoc on iddoc.pkt_broj = p.broj
left join dokumenti ddoc on ddoc.broj = 'AA016750'
where iddoc.iddoc_vdoc_sifra = 'P';

select * from istorije_dokumenata where iddoc_vdoc_sifra = 'P' and iddoc_broj = 'AA016750';

--update istorije_dokumenata set pkt_broj =null, pkt_vpk_sifra = null  where iddoc_broj = '5738873';

select * from dokumenti where vdoc_sifra = 'P';

-- daj sve pakete kod kojih je sljedeci D paket
select * from paketi;

select * from statusi_dokumenata;
select * from paketi where broj = '00150503130663';

select * from dokumenti where broj = 'A0114587';

--update paketi set orgj_sifra_za = 158 where broj = '00150503130663';
--update dokumenti set stdoc_sifra='P' where broj = 'AA016750';

--update istorije_dokumenata set pkt_broj = '0LA1110100062' where iddoc_broj = 'A0114587';

--delete from istorije_dokumenata where iddoc_broj = 'AA016750' and stdoc_sifra in ('H', 'A');

select * from istorije_dokumenata where iddoc_broj = 'AA016750';

select * from liste_neslaganja;

select * from istorije_paketa;


select * from istorije_dokumenata idoc
where idoc.iddoc_broj in (select broj from dokumenti)
and idoc.iddoc_vdoc_sifra='P'
and idoc.datum is not null
and pkt_broj is not null
and idoc.iddoc_broj = 'A0114587'
order by datum desc;