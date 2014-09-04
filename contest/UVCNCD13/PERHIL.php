<?php require("../../includes/header.php"); ?><h1>Perfect Hill</h1><div class="content">
<h3>Problem statement</h3>
<p>
	An Adventure Club in UVCE usually goes for trekking. Some members thought that, simply climbing the hill is not very interesting. They came up with a new idea to find the perfectness of the hill. you are given the slant height of the hill, and your task is to help the UVCE Adventure Club to decide whether the hill is perfect or not.
</p>
<p>
	Adventure Club thinks that all the hills are typically in the shape of isosceles triangles and for given slant height, if the height of the hill can be integer and base-width can be an even integer then the hill is said to be <strong>PERFECT</strong>, otherwise it is <strong>IMPERFECT</strong>.
</p>

<h3>INPUT</h3>
<p>
First line of the input contains the <strong>T</strong>, number of test cases.<br />
Each test case contains a single line containing an integer <strong>S</strong>, the slant height of the hill.</p>
<p><h3>OUTPUT</h3>
</p><p>
For each test case output <strong>PERFECT</strong>,if the hill is perfect otherwise output <strong>IMPERFECT</strong>.
</p>
<h3>
CONSTRAINTS</h3>
<ul>
<li>1 ≤ T ≤ 10000</li>
<li>1 ≤ S ≤ 1000000</li>
</ul>
<h3>EXAMPLE</h3>
<p><b>Input</b></p>
<p>
2<br />
5<br />
7
</p>
<p><b>Output</b></p>
<p>
PERFECT<br />
IMPERFECT
</p>
<h3>EXPLANATIONS</h3>
<ol>
<li>An isosceles triangle whose equal sides are 5 units can have 4 unit height and base width can be 6 units.</li>
<li>For a isosceles triangle whose equal sides are 7 units, there is no possibility of having integral height and base width of even integer.</li>

</ol>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/hkbharath">hkbharath</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-10-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1.5 sec</td>
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