<?php require("../../includes/header.php"); ?><h1>Little Elephant and Painting</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/mandarin/LEPAINT1.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/russian/LEPAINT.pdf">Russian</a>.</h3>

<p>Little Elephant from Zoo of Lviv likes to paint.

</p><p>He has <b>n</b> objects to paint, ordered in a row and numbered form left to right starting from <b>1</b>. There are totally <b>c</b> colors, numbered from <b>0</b> to <b>c-1</b>. At the beggining all objects are colored in color with number <b>1</b>. When object with color <b>a</b> is painted in color <b>b</b>, the resulting color will have number <b>(a*b) mod c</b>.

</p><p>Little Elephant is going to make <b>k</b> turns. At <b>i-th</b> (0-based numeration) turn he will randomly choose any subset (even empty) of objects with indices in range <b>[L<sub>i</sub>; R<sub>i</sub>]</b> (inclusive) and paint all objects in chosen subset with random color (the same for all objects in the subset).

</p><p>Little Elephant wants to know the expected sum of all colors over all <b>n</b> objects after making all <b>k</b> turns. Help him.

<h3>Input</h3>
</p><p>First line contain single integer <b>T</b> - the number of test cases. <b>T</b> test cases follow. First line of each test case contains three integers <b>n</b>, <b>c</b> and <b>k</b>. Next <b>k</b> lines of each test case contain <b>k</b> pairs of integers <b>L<sub>i</sub></b> and <b>R<sub>i</sub></b>, one pair per line.

<h3>Output</h3>
</p><p>In <b>T</b> lines print <b>T</b> real numbers - the answers for the corresponding test cases.

</p><p>Any results within 10^-6 absolute error will be accepted.

<h3>Constraints</h3>
</p><p>
1 &lt;= <b>T</b> &lt;= 10
</p><p>
1 &lt;= <b>n, k</b> &lt;= 50
</p><p>
2 &lt;= <b>c</b> &lt;= 100
</p><p>
1 &lt;= <b>L<sub>i</sub></b> &lt;= <b>R<sub>i</sub></b> &lt;= <b>n</b>

<h3>Example</h3>

<pre>
<b>Input:</b>
2
4 3 4
1 2
2 4
3 3
1 4
7 10 7
7 7
3 4
1 2
5 5
4 5
2 7
3 3

<b>Output:</b>
3.444444444
22.943125000

</pre></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2012</td>
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