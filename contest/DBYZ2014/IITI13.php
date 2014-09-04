<?php require("../../includes/header.php"); ?><h1>Sherlock and the Ciphers</h1><div class="content">
<p> </p>
<p>John Watson always knew that one of the favourite hobbies of Sherlock Holmes was to tinker with ciphers. Though Watson was not that good with ciphers, he learnt a few  things being with him. Right now, Watson is in trouble! He has been locked in a room and the only way to get out of the room is through deciphering a known string to get the password. With his knowledge, he finds out that a given string <b>S</b> can be deciphered with a given cipher array <b>A</b> (1-based index) of same length <b>N</b> as follows: Starting from first number in <b>A</b> (i.e. i=1) the 'i'th character in <b>S</b>, has to be swapped with <b>A[i]</b>th character in <b>S</b>. Help him to get out of the room.
</p>
<p> </p>
<h3>Input</h3>
<ul>
<li>First line contains no of test cases <b>T</b>. The description of <b>T</b> test cases follows.</li>
<li>Each test case consists of 3 lines:</li>
<li>Length of string <b>N</b> in the first line, the known  string <b>S</b> in the second line, and <b>N</b> space-separated integers of array <b>A</b> in the third line.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output in a single line the deciphered text.</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>A[i]</b> ≤ <b>N</b></li>
<li>Sum of <b>N</b> across all the test cases in a test file will not exceed <b>10^6</b></li>
<li>String <b>S</b> contains only lower case English letters</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
<p>
3
5
abcde
1 2 3 4 5
6
fluxus
6 5 4 3 2 1
8
hrcksleo
5 5 7 5 6 8 7 8
</p>

<b>Output:</b>
<p>
abcde
fluxus
sherlock 
</p>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iiti_adm">iiti_adm</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-01-2014</td>
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