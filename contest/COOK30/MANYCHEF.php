<?php require("../../includes/header.php"); ?><h1>Many Chefs</h1><div class="content">

<p>Chef Ciel wants to put a fancy neon signboard over the entrance of her restaurant. She has not enough money to buy the new one so she bought some old neon signboard through the internet. Ciel was quite disappointed when she received her order - some of its letters were broken. But she realized that this is even better - she could replace each broken letter by any letter she wants. So she decided to do such a replacement that the resulting signboard will contain the word <b>"CHEF"</b> as many times as possible.</p>
<p>We can model the signboard as a string <b>S</b> having capital letters from <b>'A'</b> to <b>'Z'</b>, inclusive, and question marks <b>'?'</b>. Letters in the string indicate the intact letters at the signboard, while question marks indicate broken letters. So Ciel will replace each question mark with some capital letter and her goal is to get the string that contains as many substrings equal to <b>"CHEF"</b> as possible. If there exist several such strings, she will choose the lexicographically smallest one.</p>
<p><b>Note 1.</b> The string <b>S = S<sub>1</sub>...S<sub>N</sub></b> has the substring <b>"CHEF"</b> if for some <b>i</b> we have <b>S<sub>i</sub>S<sub>i+1</sub>S<sub>i+2</sub>S<sub>i+3</sub> = "CHEF"</b>. The number of times <b>"CHEF"</b> is the substring of <b>S</b> is the number of those <b>i</b> for which <b>S<sub>i</sub>S<sub>i+1</sub>S<sub>i+2</sub>S<sub>i+3</sub> = "CHEF"</b>.</p>
<p><b>Note 2.</b> The string <b>A = A<sub>1</sub>...A<sub>N</sub></b> is called lexicographically smaller than the string <b>B = B<sub>1</sub>...B<sub>N</sub></b> if there exists <b>K</b> from <b>1</b> to <b>N</b>, inclusive, such that <b>A<sub>i</sub> = B<sub>i</sub></b> for <b>i = 1, ..., K-1</b>, and <b>A<sub>K</sub> &lt; B<sub>K</sub></b>. In particular, <b>A</b> is lexicographically smaller than <b>B</b> if <b>A<sub>1</sub> &lt; B<sub>1</sub></b>. We compare capital letters by their positions in the English alphabet. So <b>'A'</b> is the smallest letter, <b>'B'</b> is the second smallest letter, ..., <b>'Z'</b> is the largest letter.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The only line of each test case contains a string <b>S</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the content of the signboard Chef Ciel will come up with. That is you should output the lexicographically smallest string that could be obtained from the input string by replacing all its question marks by some capital letters and having as many substrings equal to <b>"CHEF"</b> as possible.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>2013</b></li>
<li><b>1</b> ≤ length of <b>S</b> ≤ <b>2013</b></li>
<li>Each character in <b>S</b> is either a capital letter from <b>'A'</b> to <b>'Z'</b>, inclusive, or the question mark <b>'?'</b>.</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
????CIELIS???E?
????CIELISOUR???F
T?KEITE?SY
????????
???C???

<b>Output:</b>
CHEFCIELISACHEF
CHEFCIELISOURCHEF
TAKEITEASY
CHEFCHEF
AAACHEF
</pre><h3>Explanation </h3>
<p><b>Example Case 1.</b> Here the resulting string can have at most 2 substrings equal to <b>"CHEF"</b>. For example, some possible such strings are:</p>
<ul>
<li><b>CHEF</b>CIELISA<b>CHEF</b></li>
<li><b>CHEF</b>CIELISQ<b>CHEF</b></li>
<li><b>CHEF</b>CIELISZ<b>CHEF</b></li>
</ul>
<p>However, lexicographically smallest one is the first one.</p>
<p><b>Example Case 3.</b> Here the resulting string cannot have <b>"CHEF"</b> as its substring. Therefore, you must simply output the lexicographically smallest string that can be obtained from the given one by replacing question marks with capital letters.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-01-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2.013 sec</td>
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