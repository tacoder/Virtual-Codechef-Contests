<?php require("../../includes/header.php"); ?><h1>Jack - The Gentleman</h1><div class="content">
<p>Recently, Jack organized  a party where his<b> N </b>girlfriends came. Each of his girlfriend was wearing a colored dress and there are <b>K</b> different color dresses in total. For this party Jack hired a photographer who secretly took photos of his girlfriends. The next morning, Jack decided to upload some photos (as taken by photographer) on Facebook but he uploads only those photos which are "pretty" to gain more number of likes. A photo is said to be "pretty" if more than half of his girlfriends in it are wearing same colored dress. In other words, if there are G girlfriend in the photo, it is pretty if strictly more than <b>G / 2</b> girlfriends have same colored dress.</p>
<p>Write a program that will check for a set of <b>M</b> pictures if they are pretty, and which color is dominating if they are. </p>
<h3>Input</h3>
<p>First line contains two integers <b>N</b> number of Girlfriends, <b>K</b> number of Colors. </p>
<p>Second line contains <b>N</b> integers between <b>1</b> and <b>K</b> (inclusive) representing color of dresses, ordered the way girlfriends came into the party.</p>
<p>Third line contains <b>M</b>, number of pictures.  </p>
<p>Next <b>M</b> lines contain two integers <b>A</b> and <b>B</b>. Each line describes one picture. On it there are all Girlfriend starting from <b>A'th</b> all the way to the <b>B'th</b>.
</p>
<h3>Output</h3>
<p>Output <b>M</b> lines. For each picture output <b>“no”</b> if Jack doesn't think the picture is pretty, and <b>“yes X”</b>, where <b>X</b> is the color dominating on the picture, if He does.</p>
<h3>Constraints</h3>
<p><b>3</b> ≤ <b>N</b> ≤ <b>300000</b></p>
<p><b>1</b> ≤ <b>K</b> ≤ <b>100000</b></p>
<p><b>1</b> ≤ <b>M</b> ≤ <b>100000</b></p>
<p><b>1</b> ≤ <b>A</b> ≤ <b>B</b> ≤ <b>N</b></p>
<h3>Example</h3>
<pre><b>Input:</b>

10 3
1 2 1 2 1 2 3 2 3 3
8
1 2
1 3
1 4
1 5
2 5
2 6
6 9
7 10

<b>Output:</b>

no
yes 1
no
yes 1
no
yes 2
no
yes 3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kushagra_om">kushagra_om</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-11-2013</td>
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