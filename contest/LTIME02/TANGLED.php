<?php require("../../includes/header.php"); ?><h1>Entangled Strings</h1><div class="content">
<p>Chef is now off his restaurant hard-work, but that doesn't mean he is allowed to rest... After all, he will be hosting a dinner to his cousins who came visit him all the way from Gigaland (as we know, Chef lives in Byteland).</p>
<p>Once they arrived, Chef got a bit worried as he saw that they were bringing along their loud children with them... Besides all the noise, he would even have to cook extra food, so he decided to keep children busy and gave them two strings <b>S1</b> and <b>S2</b>. He also has an integer <b>L</b>, which he gave to the children as well.</p>
<p>For a string <b>S=c<sub>1</sub> c<sub>2</sub> ... c<sub>N</sub></b>, let <b>S[a,b]</b> denote <b>c<sub>a</sub> c<sub>a+1</sub> ... c<sub>b-1</sub> c<sub>b</sub></b>, that is, the substring starting at <b>a<sup>th</sup></b> character and ending at <b>b<sup>th</sup></b> character. For each <b>1 ≤ i ≤ L</b>, chef wants the children to know how many tuples <b>(a, b, c, d)</b> exist for which <b>S1[a, b] = S2[c, d]</b> and <b>length of S1[a,b] is i</b>.</p>
<p>Hopefully Chef will be able to cook in peace now :)</p>
<p> </p>
<h3>Input</h3>
<p> </p>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /> The first line of each test case contains a the string <b>S1</b>. The second contains the string <b>S2</b>. The third line contains the integer <b>L</b>.</p>
<p> </p>
<h3>Output</h3>
<p> </p>
<p>For each test case, output a single line containing <b>L</b> space separated integers, where the i<sup>th</sup> integer is number of common substrings of length <b>i</b>.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>15</b></li>
<li>All strings are composed of characters <b>a-z</b>. </li>
<li>length of any string ≤ <b>2*10<sup>5</sup></b></li>
<li>In any test file, the sum of lengths of all strings is at most <b>2*10<sup>6</sup></b></li>
</ul>
<p> </p>
<p> </p>
<h3>Subtask 1(15 points)</h3>
<p> </p>
<p><b>L = 1</b></p>
<p> </p>
<h3>Subtask 2(20 points)</h3>
<p> </p>
<p><b>L ≤ 10</b></p>
<p> </p>
<h3>Subtask 3(15 points)</h3>
<p> </p>
<p>length of any string is at most <b>200</b></p>
<p> </p>
<h3>Subtask 4(20 points)</h3>
<p> </p>
<p>length of any string is at most <b>5000</b></p>
<p> </p>
<h3>Subtask 5 (30 points):</h3>
<p> </p>
<p><i> No special constraints </i></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
abcd
abcd
3
abab
babc
4
abcbca
acccca
5
abxyz
xyzab
4
<p>
<b>Output:</b>
4 3 2
6 3 1 0
12 1 0 0 0
5 3 1 0
</p></pre>
<p> </p>
<p> </p>
<h3>Explanation</h3>
<p> </p>
<p><b>Example case 2.</b> Common substrings of length 1 are (a,b,c,d) = (0,0,1,1), (2,2,1,1), (1,1,0,0), (1,1,2,2), (3,3,0,0), (3,3,2,2).<br /><br /> Common substrings of length 2 are (0, 1, 1, 2), (1, 2, 0, 1), (2, 3, 1, 2).<br /><br /> Common substrings of length 3 are (1, 3, 0, 2).<br /><br /> There is no common substring of length 4.<br /><br /><br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/utkarsh_lath">utkarsh_lath</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko‎">Rubanenko‎</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-07-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>8 sec</td>
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