select * from istorije_dokumenata where pkt_broj = '01580909140002';



update istorije_dokumenata set stdoc_sifra = 'P' where iddoc_broj = 'A9500906';

select 'x' from dual where nvl('01-SEP-24', sysdate+1) < trunc(sysdate);
select nvl('01-SEP-24', sysdate+1) from dual;

select 'x'
   from new_doc_admin.dozvoljeni_prelazi_dokumenata
   where vdoc_sifra = 'P'
     and stdoc_sifra_mijenja_iz = nvl('P', '*')
     and stdoc_sifra_mijenja_u = 'V'
     and sif_admin.util_pck.datum_u_opsegu1(sysdate, od, dzpr_do) = 1;

   select 'x'
   from dokumenti
   where vdoc_sifra = 'P'
     and orgj_sifra = 158
     and broj = 'A9500910'
     and nvl(datum_isteka, sysdate+1) < trunc(sysdate);

select * from dokumenti where broj = 'A9500906';

select * from istorije_dokumenata where iddoc_broj = 'A9500906' order by sekvenca desc;

    select * from NEW_DOC_ADMIN.ISTORIJE_DOKUMENATA IstorijeDokumenata
    where new_doc_admin.doc_read_pck.TrenutniStatus(IstorijeDokumenata.IDDOC_VDOC_SIFRA, IstorijeDokumenata.IDDOC_ORGJ_SIFRA, IstorijeDokumenata.IDDOC_BROJ) = 'P' 
    and IstorijeDokumenata.pkt_broj = '01580909140002'
    and IstorijeDokumenata.PKT_VPK_SIFRA = 'C';


select * from istorije_dokumenata where pkt_broj = '01580909140002';
    
       select stdoc_sifra
   from istorije_dokumenata
   where iddoc_vdoc_sifra = 'P'
     and iddoc_orgj_sifra = '158'
     and iddoc_broj = p_broj
     and datum <= p_datum;
     
select * from statusi_dokumenata;

SELECT 
new_doc_admin.doc_read_pck.JMBnaDokumentu(IstorijeDokumenata.IDDOC_VDOC_SIFRA,
                                          IstorijeDokumenata.IDDOC_ORGJ_SIFRA,
                                          IstorijeDokumenata.IDDOC_BROJ) OSB_JMB,
cr_admin.cr_pck.ime_prezime(new_doc_admin.doc_read_pck.JMBnaDokumentu(IstorijeDokumenata.IDDOC_VDOC_SIFRA,
                                          IstorijeDokumenata.IDDOC_ORGJ_SIFRA,
                                          IstorijeDokumenata.IDDOC_BROJ)) ime_prezime,
new_doc_admin.doc_read_pck.TrenutniStatus(IstorijeDokumenata.IDDOC_VDOC_SIFRA, IstorijeDokumenata.IDDOC_ORGJ_SIFRA, IstorijeDokumenata.IDDOC_BROJ) TrenutniStatus
FROM NEW_DOC_ADMIN.ISTORIJE_DOKUMENATA IstorijeDokumenata
where istorijedokumenata.pkt_broj = '01580909140003' and istorijedokumenata.pkt_vpk_sifra = 'C';