<?php require("../../includes/header.php"); ?><h1>Little Elephant and Strings</h1><div class="content">

<p>A Little Elephant from the Zoo of Lviv likes <i>lucky strings</i>, i.e., the strings that consist only of the lucky digits <b>4</b> and <b>7</b>.</p>
<p>The Little Elephant has <b>K</b> favorite lucky strings <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>K</sub></b>. He thinks that the lucky string <b>S</b> is <i>good</i> if either <b>|S|</b> ≥ <b>47</b> or for some <b>j</b> from <b>1</b> to <b>K</b> we have that <b> A<sub>j</sub></b> is a substring of <b>S</b>.</p>
<p>The Little Elephant has found <b>N</b> lucky strings <b>B<sub>1</sub>, B<sub>2</sub>, ..., B<sub>N</sub></b> under the pillow. Now he wants to know which of them are good. Help him and find for each <b>i</b> from <b>1</b> to <b>N</b> whether the string <b>B<sub>i</sub></b> is good or not.</p>
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
<p>The first line of the input file contains two integers <b>K</b> and <b>N</b>, the number of favorite lucky strings of the Little Elephant and the number of strings he has found under the pillow. Each of the following <b>K</b> lines contains one favorite lucky string. Namely, <b>j</b><sup>th</sup> line among these <b>K</b> lines contains the string <b>A<sub>j</sub></b>. Each of the following <b>N</b> lines contains one lucky string that was found under the pillow. Namely, <b>i</b><sup>th</sup> line among these <b>N</b> lines contains the string <b>B<sub>i</sub></b>. The input file does not contain any whitespaces.</p>
<h3>Output</h3>
<p>For each of the <b>N</b> strings that were found under the pillow print <b>Good</b> if it is good, and <b>Bad</b> otherwise.</p>
<h3>Constraints</h3>
<p>1 ≤ <b>K, N</b> ≤ 50
</p>
<p>For each string <b>S</b> in the input file we have 1 ≤ <b>|S|</b> ≤ 50.
</p>
<p>Each string in the input file consists only of the lucky digits <b>4</b> and <b>7</b>.</p>
<h3>Example</h3>
<pre>

<b>Input:</b>
2 4
47
744
7444
447
7774
77777777777777777777777777777777777777777777774

<b>Output:</b>
Good
Good
Bad
Good

</pre><h3>Explanation</h3>

<p>The string <b>S = 7444</b> is good since the favorite string <b>744</b> is its substring.</p>
<p>The string <b>S = 447</b> is good since the favorite string <b>47</b> is its substring.</p>
<p>The string <b>S = 7774</b> is bad since none of the favorite strings <b>47</b> and <b>744</b> is a substring of <b>S</b>.</p>
<p>The string <b>S = 77777777777777777777777777777777777777777777774</b> is good since its length is <b>47</b>. Note, however, that <b>S</b> does not have favorite substrings at all.</p>
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