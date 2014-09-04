<?php require("../../includes/header.php"); ?><h1>The Musical Pair</h1><div class="content">
<p>
Alice,the Nightingale of Musicland is going to represent her country in World Music Finals.<br /><br /></p>
<p>The Rules for the World Music Finals are :<br /><br /></p>
<p>1. The Contestant will sing exactly <b>2</b> songs in the competition.<br /><br />
2. The original singers of both the songs selected by the contestant should be different.<br /><br /></p>
<p>Alice has a large collection of <b>N</b> songs ( numbered from 1 to N ). However, She does not directly know the original singer of each song. Although, She knows <b>M</b> pairs of songs which was sung by the same singer.<br /><br /></p>
<p>She wants to calculate the total number of ways of selecting <b>2</b> songs for the World Finals such that it does not violate the Rules of the competition. As Alice is not good at maths she asks you to help her.<br /><br /></p>
<p><b>Note:</b><br /><br />
<b>*</b> Alice knows enough pairs to identify the group of songs although she does not know the exact original singers of the songs.<br /><br />
<b>*</b> If the songs 1,2,3,4 was sung by the same Original singer, then the pair (1,2),(2,3),(3,4) are sufficient to describe the same group without mentioning the groups (1,3),(2,4),(1,4) explicitly.
</p>
<h3>Input</h3>
<p></p><p>
The first line contains two space separated integers <b>N</b> and <b>M</b>.<br />
<br /><br />
Each of the following <b>M</b> lines contains a space seperated integer pair <b>A</b> <b>B</b>, where <b>A</b> and <b>B</b> are the songs sung by the same Original singer.
</p>

<h3>Output</h3>
<p>The total number of ways of selecting a pair of songs that satisfy the World Finals Rules.
</p>
<h3>Constraints</h3>
<p>
<b>1</b> ≤ <b>N</b> ≤ <b>10^5</b><br />
<br /><br />
<b>0</b> ≤ <b>M</b> ≤ <b>10^6</b><br />
<br /><br />
<b>1</b> ≤ <b>A,B</b> ≤ <b>N</b>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
7 5
1 2
2 3
4 6
5 7
5 4

<b>Output:</b>
12
</pre><h3>Explanation</h3>
<p>There will be only 2 groups:<br /><br />
Group1 contains songs with number 1,2,3<br /><br />
Group2 contains songs with number 4,5,6,7<br /><br />
So,Total ways of selecting a pair is by choosing 1 from each group and it can be done in (3*4)=12 ways.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/aichemzee">aichemzee</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-09-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>