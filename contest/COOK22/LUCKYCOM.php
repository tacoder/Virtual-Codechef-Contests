<?php require("../../includes/header.php"); ?><h1>Little Elephant and CNSes</h1><div class="content">

<p>A Little Elephant from the Zoo of Lviv likes <i>lucky strings</i>, i.e., the strings that consist only of the lucky digits <b>4</b> and <b>7</b>.</p>
<p> The Little Elephant has <b>N</b> favorite strings <b>S<sub>1</sub>, S<sub>2</sub>, ..., S<sub>N</sub></b> and the favorite number <b>K</b>. Each character in <b>S<sub>i</sub></b> (<b>1 ≤ i ≤ N</b>) is either the lucky digit (<b>4</b> or <b>7</b>) or the question mark <b>?</b>.</p>
<p>Consider some non-decreasing lucky string <b>S</b>. In other words, <b>S</b> has one of the following forms: <b>444...444</b>, <b>777...777</b>, <b>444...444777...777</b>. The string <b>S</b> is called a <i> CNS</i> (plural form is CNSes) if we can replace some (possibly zero) number of question marks with the lucky digits in each of the string <b>S<sub>1</sub>, S<sub>2</sub>, ..., S<sub>N</sub></b> in a such way that the total number of replacements for all strings does not exceed <b>K</b> and <b>S</b> is a subsequence of each of the strings derived after the replacement.</p>
<p>The Little Elephant wants to know the total number of all different non-empty CNSes. Help him to find this number.</p>
<p><b>Notes.</b></p>
<p>Let <b>S</b> be some string (possibly not lucky). Then</p>
<ul>
<li><b>|S|</b> denotes the length of the string <b>S</b>;
</li>
<li><b>S[i]</b> (<b>1 ≤ i ≤ |S|</b>) denotes the <b>i</b><sup>th</sup> character of <b>S</b> (the numeration of characters starts from <b>1</b>);
</li>
</ul>
<p></p>
<p>The string <b>T</b> is called a <i>subsequence</i> of the string <b>S</b> if <b>T</b> can be derived from <b>S</b> by deleting some (possibly zero) number of characters without changing the order of the remaining characters. For example, <b>T = 474</b> is a subsequence of <b>S = 74477747??</b> since after deleting characters at positions <b>1, 2, 5, 6, 8, 9, 10</b> from <b>S</b> we obtain <b>T</b>. Note that, the empty string and the string <b>S</b> itself are always the subsequences of <b>S</b>.</p>
<h3>Input</h3>
<p>The first line of the input file contains two space separated integers <b>N</b> and <b>K</b>, the number of strings in the set and the favorite number of the Little Elephant. Each of the following <b>N</b> lines contains one favorite string of the Little Elephant. Namely, <b>i</b><sup>th</sup> line among these <b>N</b> lines contains the string <b>S<sub>i</sub></b>.</p>
<h3>Output</h3>

<p> For each test case output a single line containing the answer for this test case.</p>
<h3>Constraints</h3>
<p>1 ≤ <b>N</b> ≤ 7474</p>
<p>0 ≤ <b>K</b> ≤ 10<sup>9</sup></p>
<p><b>S<sub>i</sub></b> is non-empty for <b>1 ≤ i ≤ N</b>.</p>
<p><b>|S<sub>1</sub>| + |S<sub>2</sub>| + ... + |S<sub>N</sub>|</b> ≤ 100000. In other words, the total length of all <b>N</b> strings does not exceed 100000.</p>
<p> Each character in <b>S<sub>i</sub></b> (<b>1 ≤ i ≤ N</b>) is either the lucky digit (<b>4</b> or <b>7</b>) or the question mark <b>?</b>.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3 2
4447
47???74
4?77?

<b>Output:</b>
5

</pre><h3>Explanation</h3>
<p>For the sample input all different CNSes are <b>4</b>, <b>7</b>, <b>44</b>, <b>47</b> and <b>447</b>. Note, that <b>444</b> is not a CNS since it requires at least 3 replacements of the question marks.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-03-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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