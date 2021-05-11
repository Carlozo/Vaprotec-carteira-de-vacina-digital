@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="a2">
            <article>
                <div class="azul">
                    <img src="{{ asset('images/info.png') }}" alt="">
                    <h2>Informações</h2>
                </div>
                <p>Atualmente são disponibilizadas 300 milhões de doses de imunobiológicos, sendo 19 tipos diferentes de
                    vacinas, que protegem contra mais de 20 doenças. A proteção inicia-se ainda nos recém-nascidos e
                    estende-se
                    por toda a vida. Conheça as doenças que podem ser prevenidas com a vacinação:</p>
                <p>
                    • Tuberculose; Difteria, tétano e coqueluche; Poliomielite; Influenza (gripe); Hepatite A <br>
                    • Hepatite B; Sarampo, caxumba e rubéola; Varicela Infecções por Hib; Doença Pneumocócica <br>
                    • Meningite C; Febre amarela; Rotavirose; HPV (Papilomavírus Humano)
                </p>

                <h3>índice:</h3>
                <ul>
                    <li>
                        <a href="#cria">Vacinas para Crianças</a>
                    </li>
                    <li><a href="#ado">Vacinas para Adolescentes</a></li>
                    <li><a href="#hom">Vacinas para Homens</a></li>
                    <li> Vacinas para Mulheres
                        <ul>
                            <li><a href="#mulg">Vacinas para Mulheres grávidas</a></li>
                            <li><a href="#mulng">Vacinas para Mulheres não grávidas </a></li>
                        </ul>
                    </li>
                    <li><a href="#ido">Vacinas para Idosos</a></li>
                    <li>
                        <a href="#covid"> Covid-19</a>
                    </li>

                </ul>
            </article>
        </div>
        <div class="a3">
            <article>
                <div class="azul">
                    <img src="{{ asset('images/bebe.png') }}" alt="">
                    <h2>Vacinas para crianças</h2>
                </div>
                <h3>Vacina contra tuberculose(BCG)</h3>
                <p id="cria">A BCG é uma vacina dada a todas as crianças, após o nascimento, na maternidade em apenas
                    uma
                    dose.
                    É aplicada por via intradérmica(injeção soba pele) de preferência no braço direito. É benéfica pois
                    protege contra formas graves da tuberculose, doença contagiosa, produzida pela bactéria que atinge
                    principalmente os pulmões. <br>
                    Apesar de ser necessária somente uma dose da vacina, o ministério da saúde recomenda uma dose de
                    reforço a cada seis anos.
                </p>
                <h3>Vacina oral contra poliomelite ou paralisia infantil(VOP)</h3>
                <p>A VOP é uma vacina dada a todas as crianças menores de 5 anos, a partir dos dois meses de idade.
                    É dada por via oral. Em três doses, com intervalo entre sessenta dias entre cada dose, sendo assim,
                    é
                    preciso tomar
                    aos dois, quatro e seis meses de idade, com reforço aos 15 meses. Cada dose corresponde a duas
                    gotas.
                    Oferece
                    proteção contra poliomelite ou paralisia infantil, doença contagiosa, provocada por vírus e
                    caracterizada
                    por paralisia súbita
                    geralmente as pernas.
                    No Brasil, todas as crianças menores de cinco anos de idade devem receber a vacina nos dias de
                    campanha
                    nacional, idependentemente
                    de já estarem com suas vacinas em dia.

                </p>

                <h3>Vacina oral contra Difteria, Tétano, Coqueluche e Meningite causada por Haemophilus(Vacina
                    TetraValente)</h3>
                <p>A Vacina TetraValente é oferecida a todas as crianças, aos dois, quatro e seis meses. É necessária
                    uma
                    dose
                    de reforço
                    só com a DTP aos 15 meses. A criança deverá receber, ainda outra dose, aos dez ou onze anos com a
                    vacina
                    dupla adulto(difteria e tétano).
                    É dada por injeção via intramuscular no vasto lateral da coxa(em crianças com menos de dois anos) ou
                    na
                    parte superior
                    do braço(em crianças com mais de 2 anos). <br>
                    Oferece proteção contra a difteria, o tétano, a coqueluche e a Haemophilus influenzae do tipo b, que
                    causa
                    um tipo de meningite.

                <ul>
                    <li id="tetano">Tétano: O tétano é uma infeccção, causada por uma toxina, que entr no organismo por
                        ferimentos ou lesões
                        na pele(Tétano Acidental), ou pelo coto do cordão umbilical(Tétano neonatal ou mal dos sete
                        dias) e
                        atinge o
                        sistema nervoso central. Caracteriza-se por contrações e espasmos, dificuldade em engolir e
                        rigidez
                        no
                        pescoço.
                    </li>
                    <li>Difteria: A difteria é causada por um bacilo, prdutor de uma toxina que atinge as amídalas, a
                        faringe,
                        o nariz e a pele, onde provoca placas branco-acizentadas. É transmitida por meio de tosse ou
                        espirro,
                        de uma pessoa contaminada para outra.

                    </li>
                    <li>Coqueluche: A coqueluche é uma doença infecciosa que compromete o aparelho respiratório.
                        Caracteriza-se
                        por crises
                        de tosse seca. Em crianças com menos de seis meses, apresenta-se de forma mais grave e pode
                        levar a
                        morte.
                    </li>
                    <li>Haemophilus influenzae do tipo B:A Haemophilus influenzae do tipo B é uma bactéria que causa um
                        tiposde
                        meningite
                        ,sinusite e pneumonia.A doença mais grave é a meningite cujo sintomas são: febre, dor de cabeça,
                        náusea, vômito e rigidez na nuca(pescoço duro), que é grave e pode levar a morte.
                    </li>
                </ul>

                <h3>Vacina contra Sarampo, Rubéola e Caxumba(Tríplice Viral- SRC)</h3>
                <p> A Vacina contra tríplice viral é oferecida a todas as crianças, aos 12 meses de idade e nos momentos
                    em
                    que
                    ocorrem
                    campanhas. Aplicada por injeção subcutânea(sob a pele). Deve ser aplicada na parte superior do braço
                    -
                    músculo tifóide.
                    É necessária somete uma dos eda vacina. <br>
                    Oferece Proteção contra o Sarampo, Rubéola e Caxumba
                <ul>
                    <li id="sarampo">Sarampo: O sarampo é uma doença muito contagiosa, causada por um vírus que provoca
                        febre
                        alta, tosse, coriza
                        e manchas avermelhadas pelo corpo. Facilita o aparecimento de doenças como a pneumonia e
                        diarréias e
                        pode levar
                        a morte, principalmente em crianças pequenas.
                    </li>
                    <li>Rubéola: A Rubéola é uma doença muito contagiosa, provocada por um vírus que atinnge
                        principalmete
                        crianças e
                        provoca febre e manchas vermelhas na pele.
                    </li>
                    <li>Caxumba: A caxumba é uma doeça viral, caracterizada pela febre e aumento de volume de uma ou
                        mais
                        glândulas
                        reponsáveis pela produção de saliva na boca(parótida), e, às vezes, de glâdulas que ficam sob a
                        língua
                        ou a
                        mandíbula. O maior perigo da caxuma "crescer", isto é, causar iflamação dos testículos
                        principalmete
                        em
                        homens
                        adultos, que podem ficar sem poder ter filhos depois da infeccção. Pode causar inflamação dos
                        ovários
                        nas mulheres
                        e meningite viral. É transmitida pela tosse, espirro ou fala de pessoas infectadas.
                    </li>
                </ul>

                <h3>Vacina contra Hepatite B</h3>

                <p>A vacina contra Hepatite B é oferecida a todas as crianças em três doses. Primeira dose na
                    maternidade,
                    segunda com um mês de idade e terceira, com seis meses.
                    Por injeção via intramuscular no vasto lateral da coxa (em crianças com menos de dois anos) ou na
                    parte
                    superior da coxa(em crianças com mais de dois anos). <br>
                    Oferece proteção contra Hepatite B, causada por um vírus que provoca mal-estar, febre baixa, dor de
                    cabeça,
                    fadiga,
                    dor abdominal, náuseas, vômitos e aversão de alguns alimentos. O doente fica com a pele amarelada. A
                    Hepatite B, é uma
                    doença grave porque pode levar a uma infeccção crônica do fígado e , na idade adulta, levar ao
                    câncer de
                    fígado.
                </p>

                <h3>Vacina contra Febre Amarela</h3>

                <p id="febre">A vacina contra a febre amarela é oferecida a todas as crianças, a partir dos seis meses
                    de
                    idade,
                    em
                    regiões endêmicas. Em regiões onde há circulação do vírus entre animais, mas não em humanos, a
                    vacina
                    deve
                    ser dada
                    aos nove meses de idade. A vacina deve ser dada ainda, em todas as pessoas que pretendem viajar para
                    locais
                    onde a
                    febre amarela é endêmica. A dose deve ser tomada novamente a cada dez anos. <br>
                    Oferece proteção contra a febre amarela, doença indecciosa, causada por umvírus transmitido por
                    vários
                    tipos
                    de mosquito. É
                    uma doença grave, que se caracteriza por febre repentina, calafrios, dor de cabeça, náuseas e leva
                    ao
                    sangramento do fígado, no cérebro e nos rins, podendo, em muitos casos, causar a morte.
                </p>
            </article>
        </div>
        <div class="a3">
            <article>
                <div class="azul">
                    <img src=" {{ asset('images/adolescente.png') }}" alt="">
                    <h2>Vacinas para Adolescentes</h2>
                </div>
                <h3>Vacina contra Difteria e Tétano (Duplo Adulto- DT)</h3>

                <p id="ado">A vacina contra <a href="#tetano">Difteria e Tétano </a>é disponibilizada a todos os
                    adolescentes.
                    Adolescentes que nunca tomaram
                    a vacina podem tomar em qualquer idade, em três doses, com intervalo de 2 meses entre as doses. Quem
                    já
                    recebeu
                    a dose DT aos dez ou onze anos, precisa receber apenas um reforço a cada dez anos. É aplicada por
                    injeção
                    via intramuscular na parte superior do braço ou no vasto lateral da coxa.
                </p>
                <h3>Vacina contra Febre Amarela</h3>
                <p>A vacina contra a <a href="#febre">febre amarela</a> deve ser oferecida a todos os adolescentes em
                    regiões
                    endêmicas, e em regiões onde há
                    circulação do vírus entre animais(macacos).

                </p>

                <h3>Vacina contra Hepatite B</h3>
                <p> A vacina contra Hepatite B é oferecida a todos os adolescentes(até 19 anos) que não foram vacinados
                    quando crianças.Aplicada em três doses; A primeira; a segunda, trimta dias após; e aterceira, seis
                    meses
                    após a primeira.
                    Além disso, certos grupos específicos de maior risco também necessitam dela, sendo:

                <ul>
                    <li>Pessoas com doenças crônicas do fígado</li>
                    <li>Pessoas que fazem hemodiálise</li>
                    <li>Pessoas que precisam receber muitas transfusões de sangue</li>
                    <li>Pessoas com hemofilia, talessemia</li>
                    <li>Pessoas que moram com quem tem hepatite B</li>
                    <li>Profissionais do sexo</li>
                    <li>Usuários de drogas</li>
                    <li>Pessoas infectadas pelo vírus HIV</li>
                    <li>Profissionais da saúde</li>
                </ul>

                <h3>Vacina contra Sarampo, Rubéola (Dupla Viral- SR)</h3>
                <p> A Dupla Viral contra <a href="#sarampo">Sarampo e Rubéola</a> é disponibilizada para todos os
                    adolescentes
                    que não foram vacinados quando crianças, e, em
                    especial, estudantes e profissionais da área da saúde, profissionais de turismo e quem for viajar
                    fora
                    do
                    país,
                    uma vez queo sarampo ainda causa epidemias e é muito comum em outros países do mundo.

                <h3>Vacina contra o HPV</h3>

                <p>A vacina contra o HPV, ou papiloma vírus humano, é dada em forma de injeção e tem como função
                    prevenir doenças causadas por este vírus, como lesões pré-cancerosas, câncer do colo do útero,
                    vulva e vagina, ânus e verrugas genitais. Esta vacina pode ser tomada no posto de saúde e
                    clínicas particulares, mas também é oferecida pelo SUS nos postos de saúde e em campanhas
                    de vacinação nas escolas. <br>

                    A vacina oferecida pelo SUS é a quadrivalente, que protege contra os 4 tipos de vírus HPV mais
                    comuns no
                    Brasil. Após a toma da vacina o corpo produz os anticorpos necessários para combater o vírus e
                    assim,
                    caso a
                    pessoa seja infectada, ela não desenvolve a doença, ficando protegida.
                    A vacina está disponível gratuitamente nos postos de saúde, em 2 a 3 doses, para:
                <ul>
                    <li>Meninos e meninas dos 9 aos 14 anos;</li>
                    <li>Homens e mulheres de 9 a 26 anos vivendo com HIV ou AIDS, pacientes que receberam transplante de
                        órgãos,
                        de medula óssea e pessoas em tratamento contra o câncer.
                        A vacina pode ser tomada, também, por meninos e meninas que já não são virgens, mas a sua
                        eficácia
                        pode
                        estar diminuída, pois já podem ter estado em contato com o vírus.
                    </li>
                </ul>


            </article>
        </div>
        <div class="a3">
            <article>
                <div class="azul">
                    <img src="{{ asset('images/homem.png') }} " alt="">
                    <h2>Vacinas para Homens </h2>
                </div>
                <h3>Vacina contra Difteria e Tétano (Duplo Adulto- DT)</h3>

                <p id="hom">A vacina contra <a href="#tetano">Difteria e Tétano </a>é disponibilizada a todos os
                    adultos.
                    Adultos que nunca tomaram
                    a vacina podem tomar em qualquer idade, em três doses, com intervalo de 2 meses entre as doses. Quem
                    já
                    recebeu
                    a dose DT aos dez ou onze anos, precisa receber apenas um reforço a cada dez anos. É aplicada por
                    injeção
                    via intramuscular na parte superior do braço ou no vasto lateral da coxa.
                </p>
                <h3>Vacina contra Febre Amarela</h3>
                <p>A vacina contra a <a href="#febre">febre amarela</a> deve ser oferecida a todos os Adultos em regiões
                    endêmicas, e em regiões onde há
                    circulação do vírus entre animais(macacos).

                </p>

                <h3>Vacina contra Sarampo, Rubéola (Dupla Viral- SR)</h3>
                <p> A Dupla Viral contra <a href="#sarampo">Sarampo e Rubéola</a> é disponibilizada para todos os
                    adultos
                    que
                    não foram vacinados quando crianças, até
                    os trinta e nove anos de idade.Após esta idade, o risco de pegar sarampo é muito pequeno. <br>
                    Em especial, estudantes e profissionais da área da saúde, profissionais de turismo e quem for viajar
                    fora do
                    país,
                    uma vez queo sarampo ainda causa epidemias e é muito comum em outros países do mundo.

                <h3>Vacina contra o HPV</h3>

                <p> A vacina dp <a href="HPV"></a> é disponível para Homens de 9 a 26 anos vivendo com HIV ou AIDS,
                    pacientes
                    que receberam transplante de órgãos, de medula óssea e pessoas em tratamento contra o câncer.
                </p>


            </article>
        </div>
        <div class="a3">
            <article>
                <div class="azul">
                    <img src="../images/mulher.png" alt="">
                    </h2>Vacinas para Mulheres </h2>
                </div>
                <h3 id="mulg">Mulheres grávidas: Vacinas a serem tomadas durante a gravidez</h3>
                <h3>Vacina contra Difteria e Tétano (Duplo Adulto- DT)</h3>

                <p>A vacina contra <a href="#tetano">Difteria e Tétano </a>é disponibilizada a todas as mulheres de doze
                    a
                    49
                    anos, independetemente
                    de estarrem grávidas ou não. <br>
                    Mulheres grávidas que não estiverem com a vacina em dia precisam receber pelo menos duas doses da
                    vacina
                    durante a
                    gravidez, sendo que a segunda dose deve ser recebida pelo menos trinta dias antes do parto. A última
                    dose
                    deve ser toomada após
                    o parto, na primeira visita ao posto de saúde. <br>
                    Quando a mulher está com a vacina em dia, mas recebeu sua última dose há mais de cinco anos, ptrcisa
                    tomar
                    uma dose de reforço
                    durante a gravidez. <br>
                    Quando a mlher grávida está com a vacina em dia e a última dose foi há menos de cinco anos, ela e o
                    bebê
                    estão completamente
                    protegidos.
                    É aplicada por injeção via intramuscular na parte superior do braço ou no vasto lateral da coxa.
                </p>
                <h3>Mulheres não-grávidas: vacinas a serem tomadas fora da gravidez</h3>
                <h3>Vacina contra Febre Amarela</h3>
                <p id="mulng">A vacina contra a <a href="#febre">febre amarela</a> deve ser oferecida a todos as
                    mulheres
                    não-grávidas em regiões endêmicas, e em regiões onde há
                    circulação do vírus entre animais(macacos).

                </p>

                <h3>Vacina contra Difteria e Tétano (Duplo Adulto- DT)</h3>

                <p>A vacina contra <a href="#tetano">Difteria e Tétano </a>é disponibilizada a todas as mulheres de doze
                    a
                    49
                    anos.
                    Mulheres que nunca tomaram a vacina podem tomar em qualquer idade. Quem já recebeu a dose dupla
                    adulto
                    precisa apenas de um reforço a cada dez anos.
                </p>

                <h3>Vacina contra Sarampo, Rubéola (Dupla Viral- SR)</h3>
                <p> A Dupla Viral contra <a href="#sarampo">Sarampo e Rubéola</a> é disponibilizada para todos as
                    mulheres
                    que
                    não foram vacinadas quando crianças, até
                    os trinta e nove anos de idade e que não estejam grávidas.Após esta idade, o risco de pegar sarampo
                    é
                    muito
                    pequeno. <br>
                    Em especial, estudantes e profissionais da área da saúde, profissionais de turismo e quem for viajar
                    fora do
                    país,
                    uma vez queo sarampo ainda causa epidemias e é muito comum em outros países do mundo.

                <h3>Vacina contra o HPV</h3>

                <p> A vacina dp <a href="HPV"></a> é disponível para Mulheres de 9 a 26 anos vivendo com HIV ou AIDS,
                    pacientes
                    que receberam transplante de órgãos, de medula óssea e pessoas em tratamento contra o câncer.
                </p>


            </article>
        </div>
        <div class="a3">
            <article>
                <div class="azul">
                    <img src="../images/idosos.png" alt="">
                    </h2>Vacinas para Idosos </h2>
                </div>
                <h3>Vacina contra Difteria e Tétano (Duplo Adulto- DT)</h3>

                <p id="ido">A vacina contra <a href="#tetano">Difteria e Tétano </a>é disponibilizada a todos os idosos
                    com
                    mais
                    de sessenta. Idosos que nunca tomaram
                    a vacina podem tomar em qualquer idade, em três doses, com intervalo de 2 meses entre as doses. Quem
                    já
                    recebeu
                    a dose DT aos dez ou onze anos, precisa receber apenas um reforço a cada dez anos. É aplicada por
                    injeção
                    via intramuscular na parte superior do braço ou no vasto lateral da coxa.
                </p>
                <h3>Vacina contra Influenza(Gripe)</h3>

                <p>Por ser um vírus que muda muito, a cada ano, uma vacina nova é desenvolvida, pois são levados em
                    consideração
                    os tipos de vírus que estão circulando no momento. A OMS, recomendo, a cada ano, quais tipos de
                    vírus
                    que
                    devem
                    ser utilizados para fazer a vacina. <br>
                    Idosos com mais de sessenta anos devem tomar a vacina uma vez por ano, no outono, quando acontece a
                    campanha
                    de vacinação
                    do idoso.
                    Oferece proteção contra a influenza ou gripe, doença caracterizada por febre alta, calafrios,
                    dor-de-cabeça,
                    mal-estar,
                    tosse seca e dor muscular, e que pode gerar complicações como infeccções respiratórias agudas.
                    Estudos
                    recentes
                    também indicam que a vacina também protege contra infarto e derrame. <br>
                    A vacina contra gripe não protege contra resfriados comuns, causados por outros vírus e que
                    geralmente
                    se
                    caracterizam com sintomas mais leves.
                </p>

                <h3>Vacina contra Pneumonia(Pneumococo)</h3>

                <p>A vacina contra Pneumonia é disponibilizada para idosos com mais de sessenta anos que vivem em
                    instituições
                    fechadas
                    como asilos, hospitais e casas de repouso, por apresentarem maior risco de contfrair pneumonias. É
                    preciso
                    tomar
                    durante as campanhas de vacinação destinadas a idosos. Lembrar que é preciso uma única dose de
                    reforço
                    cinco
                    anos após a primeira dose. <br>
                    Oferece proteção contra pneumonia causada pelo pneumococo. A pneumonia é uma infeccção respiratótia
                    grave,
                    que se caracteriza
                    por febre, tosse com catarro, e, em muitos casos, precisa de internação, podendo levar a pessoa a
                    morte,
                    se
                    não tratada
                    adequadamente.
                </p>


            </article>
        </div>
        <div class="a3">
            <article>
                <div class="azul">
                    <img src="{{ asset('images/virus.png') }}" alt="">
                    <h2>COVID-19 </h2>
                </div>
                <h3>Vacinas</h3>
                <p id="covid"> Apenas duas vacinas estão em aplicação no Brasil atualmente: a Coronavac, que é fabricada
                    pelo
                    Instituto Butantan e a
                    Oxford/Astrazeneca, envazada pela Fiocruz. Segundo o Ministério da saúde, mais de 15 milhões de
                    brasileliros
                    receberam a primeira
                    dose da vaacina, segundo o Ministério da Saúde. Mas outros laboratórios já solicitaram uso
                    emergencial e
                    podem, em breve, aumentar as opções de imunizantes disponíveis no Brasil.

                    Nesta semana, a Anvisa autorizou o uso emergencial da vacina Jansen, laboratório da Jonhson
                    &Johnson. A
                    vantagem desta vacina é que ela garante eficácia em apenas uma dose.

                    Segundo o calendário do Ministério da Saúde, a entrega de 38 milhões de doses do imunizante da
                    Jansen
                    deve
                    começar em julho.

                    E tem mais uma a caminho. A Anvisa, responsável pela autorização das vacinas, já aprovou o pedido de
                    registro definitivo da vacina da Pfizer, do laboratório Biontech
                    O recém empossado ministro da Saúde Marcelo Queiroga diz que meta do governo é vacinar 1 milhão por
                    dia
                    a
                    partir deste mês.

                    Enquanto a vacinação não alcança a maior parte dos brasileiros, a recomendação de manter o
                    distanciamento
                    social e o uso de máscara continua.

                    <br>
                </p>


            </article>
        </div>
        <div class="a4">
            <article>
                <div class="azul">
                    <img src="../images/info.png" alt="">
                    <h2>Referências </h2>
                </div>
                <h3 id="referencias">Sites</h3>
                <a target="blank" href="https://bvsms.saude.gov.br/bvs/publicacoes/manual_procedimentos_vacinacao.pdf">https://bvsms.saude.gov.br</a>
                <br>
                <a target="blank"
                   href="https://www.tuasaude.com/vacina-para-hpv/">https://www.tuasaude.com/vacina-para-hpv/</a>
                <br>
                <a target="blank"
                   href="https://agenciabrasil.ebc.com.br/radioagencia-nacional/politica/audio/2021-04/covid-19-com-duas-vacinas-disponiveis-brasil-imunizou-15-milhoes">https://agenciabrasil.ebc.com.br/</a>
                <br><a target="blank"
                       href="https://portalarquivos.saude.gov.br/campanhas/vivamaissus/vacinacaoinfantil_interna.html#:~:text=Atualmente%20s%C3%A3o%20disponibilizadas%20300%20milh%C3%B5es,ser%20prevenidas%20com%20a%20vacina%C3%A7%C3%A3o%3A&text=Tuberculose">https://portalarquivos.saude.gov.br/</a>
            </article>
        </div>
    </div>
@endsection
