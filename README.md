WordPress Sverige
=================

Utvecklingsversion av WordPress Sverige. Det här är ett försök till samlad utveckling av WordPress Sveriges communityportal. 

För diskussioner, använd [ärendesystemet (Issues)](https://github.com/wpsvse/wpsv.se/issues). Var inte rädda för att tycka till och säga ert!

* [Informationsstruktur](https://github.com/wpsvse/wpsv.se/wiki/Informationsstruktur-f%C3%B6r-projektet)
* [Projektplanering, mål och delmål](https://github.com/wpsvse/wpsv.se/wiki/Projektplanering,-m%C3%A5l-och-delm%C3%A5l)
* [Allmän issue-tråd för diskussioner kring planering, tilldelning osv.](https://github.com/wpsvse/wpsv.se/issues/22)

Vill du delta?
Observera att projektet består av flera repos.
* [**Huvudrepo**](https://github.com/wpsvse/wpsv.se/) - Innehåller allt för webbplats och saker runt denna. (Forka denna för tillägg och annat som inte är specifikt för temat).
* [**Temarepo**](https://github.com/wpsvse/wpsvse/) - Innehåller allt specifkt för temat på wpsv.se. Använd denna repo för allt som rör temat.

Grund till föreslagna förändringar
==================================

Till en början så kan man vara efterklok och konstatera att köpet av vBulletin-licensen var en rätt dålig investering. vBulletin 4 har nog blivit den mest kritiserade versionen av deras forum. Man gick därav över till utvecklingen av version 5 snabbare än väntat. En uppdatering av licensen känns i dagsläget inte berättigad.

Tillägg för vBulletin kontrolleras rätt dåligt och har inte i närheten av samma framtidssäkerhet som tillägg för WordPress. Vi har t.ex haft problem med vBSSO för den globala inloggningen. Det är inte fullt kompatibelt med senaste versionen av vB och skapar problem när senaste vB var en säkerhetsuppdatering. Två av dom tillägg vi har använt har blivit övergivna och det med säkerhetshål. Dessa har helt sonika fått avinstallerats.

Slutsatsen man gärna vill dra är alltså att vBulletin inte lever upp till sitt namn, något som gör att man sneglar på bbPress+BuddyPress (speciellt sedan båda dessa nu mer är tillägg). Det känns som det skulle vara den ultimata lösningen för just WordPress Sverige. Med WordPress+bbPress+BuddyPress så skulle vi inte ens behöva tänka på den globala inloggningen, den kommer naturligt. Vi skulle enkelt kunna skapa den extra funktionalitet vi behöver i WordPress. Vi skulle även kunna göra verklighet av att använda GlotPress för att skapa en översättningsplattform för att få fart på möjligheten att översätta fler teman och tillägg ala “crowdsourcing”.


Tänkt planering
===============

* Gör hela WordPress Sverige responsivt baserat på förslagsvis Bootstrap 3.
* Skapa ett nytt tema med ny design och samma tänk av upplägg som tidigare (gäller framför allt startsidan).
* Trimma all anpassad funktionalitet i WordPress och flytta ut det ur temat (se branch 3.0).
* Byt ut vBulletin mot bbPress+BuddyPress.
* Lägg upp GlotPress som översättningsplattform och försök att automatisera så mycket som möjligt mot filarkiv och för uppladdning av språkfiler.
* Lägg till BuddyPress som communityverktyg
* Skapa översättningsteam och grupper under BuddyPress/GlotPress.

Målet med WordPress Sverige
===========================

***"En svensk samlingsplats för WordPress-användare"***. 

WordPress Sveriges mål har alltid varit att vara samlingsplatsen där svenska användare av WordPress kan träffas, skapa kontakter, ta del av support och skapa översättningar för WordPress, teman och tillägg.

Den största grundstenen har alltid varit forumet och det är framför allt support på svenska som har varit det som efterfrågats *(lite av det vi ser i Facebook-gruppen just nu)*.

Det har även alltid funnits ett mål att organisera översättare för allt runt WordPress, att skapa en standard som kan användas genomgående för översättningar och som kan underlätta för den som vill översätta.

Ett mål som vi haft svårt att nå är att skapa en samlingsplats även för professionella utvecklare av WordPress, för utbyte av kunskaper och erfarenheter, förmedling av uppdrag och för att skapa kontakter. Det har varit svårt att skapa open source/community-andan bland svenska professionella utvecklare. Problematiken är nog att många av dom professionella utvecklarna klarar sig bra med dom engelskspråkiga resurser som redan finns. Men det är en något vi gärna ser breddas även till att inkludera en svensk resurs som kan tilltala, inte minst för att skapa en grym svensk sammanhållning som community.

=======
