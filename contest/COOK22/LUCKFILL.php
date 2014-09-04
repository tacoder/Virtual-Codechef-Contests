<?php require("../../includes/header.php"); ?><h1>Little Elephant and Filling</h1><div class="content">

<p>A Little Elephant from the Zoo of Lviv likes <i>lucky strings</i>, i.e., the strings that consist only of the lucky digits <b>4</b> and <b>7</b>.</p>
<p>The Little Elephant has the string <b>S</b> such that each character in <b>S</b> is either the lucky digit (<b>4</b> or <b>7</b>) or the question mark <b>?</b>. He can replace each question mark with one of the lucky digits in order to obtain the lucky string. He wants to know the number of different ways he can do this such that the resulting lucky string has no more than <b>K</b> different substrings. Help him and find this number. Note, that <b>he need to replace all question marks.</b></p>
<p>Consider some example. From the string <b>47?4?</b> we can obtain four lucky strings by replacing question marks with the lucky digits: <b>47444</b>, <b>47447</b>, <b>47744</b> and <b>47747</b>. The corresponding numbers of different substrings are <b>11</b>, <b>11</b>, <b>12</b> and <b>11</b>. For example, all different substrings of the string <b>47447</b> are <b>4</b>, <b>7</b>, <b>44</b>, <b>47</b>, <b>74</b>, <b>447</b>, <b>474</b>, <b>744</b>, <b>4744</b>, <b>7447</b> and <b>47447</b>.</p>
<p><b>Notes.</b></p>
<p>Let <b>S</b> be some lucky string. Then</p>
<ul>
<li><b>|S|</b> denotes the length of the string <b>S</b>;
</li>
<li><b>S[i]</b> (<b>1 ≤ i ≤ |S|</b>) denotes the <b>i</b><sup>th</sup> character of <b>S</b> (the numeration of characters starts from <b>1</b>);
</li>
<li>The string <b>T</b> of the length <b>M</b> is called a <i>substring</i> of <b>S</b> if for some <b>k</b> from <b>0</b> to <b>|S| - M</b> we have <br />
<b>T[1] = S[k + 1], T[2] = S[k + 2], ..., T[M] = S[k + M]</b>.
</li>
</ul>
<h3>Input</h3>
<p>The first line of the input file contains a single positive integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. The first line of each test case contains two space separated integers <b>N</b> and <b>K</b>. The second line contains the string <b>S</b> of the length <b>N</b>.</p>
<h3>Output</h3>

<p> For each test case output a single line containing the answer for the corresponding test case.</p>
<h3>Constraints</h3>

<p> 1 ≤ <b>T</b> ≤ 4747 </p>
<p> 1 ≤ <b>N, K</b> ≤ 50 </p>
<p> For each string <b>S</b> from the input file we have that <b>|S| = N</b> and each character in <b>S</b> is either the lucky digit (<b>4</b> or <b>7</b>) or the question mark <b>?</b>.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2 2
??
3 7
?4?

<b>Output:</b>
2
4

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>27-01-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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