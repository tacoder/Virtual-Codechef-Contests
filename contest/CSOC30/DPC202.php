<?php require("../../includes/header.php"); ?><h1>Bio-HRQ-Comparator</h1><div class="content">

<p align="center" class="MsoNormal">
        <b><u><br />
        <span>Bio-HRQ-Comparator</span></u></b></p>
<p class="MsoNormal">
        <span> </span></p>
<p class="MsoNormal">
        <span>Bio-HRQ-Comparator is a fully automatic<br />
        computer based neurological scanning</span></p>
<p class="MsoNormal">
        <span>system that scans brains of three persons<br />
        simultaneously and ranks them 1, 2, 3 with respect</span></p>
<p class="MsoNormal">
        <span>to their HRQ (Human Resource Quotient) for<br />
        a given activity. Bio-HRQ-Comparator has three</span></p>
<p class="MsoNormal">
        <span>specially designed chairs each fitted with<br />
        brain scanning devise. Exactly three persons are to</span></p>
<p class="MsoNormal">
        <span>sit on the chairs and just think<br />
        independently and simultaneously on the best possible solution</span></p>
<p class="MsoNormal">
        <span>of a given problem related to an activity<br />
        for which HRQ is tested. The thinking process</span></p>
<p class="MsoNormal">
        <span>continues for a specified duration of time<br />
        that is dependent on the complexity of the given</span></p>
<p class="MsoNormal">
        <span>problem. Bio-HRQ-Comparator captures the<br />
        thinking process and ranks them with respect to</span></p>
<p class="MsoNormal">
        <span>their HRQ without any further scrutiny.<br />
        Through rigorous testing and analysis, ranking by Bio-</span></p>
<p class="MsoNormal">
        <span>HRQ-comparator has been found to be so<br />
        precise that no two ranked persons are identified</span></p>
<p class="MsoNormal">
        <span>to have different rank order or found to<br />
        have the same HRQ.</span></p>
<p class="MsoNormal">
        <span>The system has the potential to replace<br />
        the traditional method of selection of</span></p>
<p class="MsoNormal">
        <span>candidates through interview, where the<br />
        basic problem is to arrive at total ordering and</span></p>
<p class="MsoNormal">
        <span>ranking of a given set of n (assume n≤ 20)<br />
        candidates with respect to their HRQ for a specific</span></p>
<p class="MsoNormal">
        <span>job. It is proposed to select arbitrarily<br />
        k sets of three candidates each and rank candidates in</span></p>
<p class="MsoNormal">
        <span>each set using Bio-HRQ-comparator hoping<br />
        that total ordering and ranking of candidates can</span></p>
<p class="MsoNormal">
        <span>be done successfully. However it is not<br />
        always possible to arrive at total ordering and ranking</span></p>
<p class="MsoNormal">
        <span>of all n candidates using arbitrarily<br />
        selected k sets of candidates.</span></p>
<p class="MsoNormal">
        <span>You are required to write a program that<br />
        either ranks all n candidates, if possible,</span></p>
<p class="MsoNormal">
        <span>using the k results obtained so far or<br />
        determines the minimum number m of additional Bio-</span></p>
<p class="MsoNormal">
        <span>HRQ-comparator testing required for<br />
        determining the total ordering and ranking of all n</span></p>
<p class="MsoNormal">
        <span>candidates. In case m additional testing<br />
        are required, the program should identify m sets of</span></p>
<p class="MsoNormal">
        <span>three candidates each, for additional<br />
        Bio-HRQ-comparator testing. Assume for simplicity that</span></p>
<p class="MsoNormal">
        <span>a candidate is not required to appear more<br />
        than twice for additional testing.</span></p>
<p class="MsoNormal">
        <b><br />
        <span>Input</span></b></p>
<p class="MsoNormal">
        <span>Input may contain multiple test cases.<br />
        Each test case contains two lines.</span></p>
<p class="MsoNormal">
        <span>The 1st line gives n and a string of n<br />
        letters. Each letter in the string identifies a</span></p>
<p class="MsoNormal">
        <span>candidate and letters appear in an<br />
        arbitrary order.</span></p>
<p class="MsoNormal">
        <span>The 2nd line gives k results of<br />
        Bio-HRQ-comparator testing. The first field is the integer</span></p>
<p class="MsoNormal">
        <span>k and it is followed by k strings of three<br />
        letters each representing k results. The three letters in</span></p>
<p class="MsoNormal">
        <span>a string appear in order of ranks 1, 2 and<br />
        3 of candidates represented by the letters.</span></p>
<p class="MsoNormal">
        <span>Input terminates with a line that contains<br />
        0 (zero) as the first and the only character.</span></p>
<p class="MsoNormal">
        <b><br />
        <span>Output</span></b></p>
<p class="MsoNormal">
        <span>For each test case, print output in one<br />
        line.</span></p>
<p class="MsoNormal">
        <span>The first field in the line gives the<br />
        integer m. If m is equal to 0 then a string of n letters</span></p>
<p class="MsoNormal">
        <span>follows it; the string represents the<br />
        total rank order of all n candidates.</span></p>
<p class="MsoNormal">
        <span>Otherwise m strings each of length three<br />
        follow the integer m. Each string contains</span></p>
<p class="MsoNormal">
        <span>either three letters or two letters<br />
        followed by an asterisk (*). Each letter identifies a specified</span></p>
<p class="MsoNormal">
        <span>candidate while an asterisk represents an<br />
        option to have any candidate. Letters in a string</span></p>
<p class="MsoNormal">
        <span>appear in alphabetic order and strings<br />
        appear in lexicographic order.</span></p>
<p class="MsoNormal">
        <b><br />
        <span>Sample Input</span></b></p>
<p class="MsoNormal">
        <span>5 axdpf</span></p>
<p class="MsoNormal">
        <span>3 adf xdp axp</span></p>
<p class="MsoNormal">
        <span>5 xapfd</span></p>
<p class="MsoNormal">
        <span>3 afd xdp axf</span></p>
<p class="MsoNormal">
        <span>7 adgbnem</span></p>
<p class="MsoNormal">
        <span>4 aem egn dgm emb</span></p>
<p class="MsoNormal">
        <span>0</span></p>
<p class="MsoNormal">
        <span> </span></p>
<p class="MsoNormal">
        <span> </span></p>
<p class="MsoNormal">
        <b><br />
        <span>Sample Output</span></b></p>
<p class="MsoNormal">
        <span>1 fp*</span></p>
<p class="MsoNormal">
        <span>0 axfdp</span></p>
<p class="MsoNormal">
        <span>2 ade bmn</span></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rushikesh30">rushikesh30</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-03-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>