<?php require("../../includes/header.php"); ?><h1>Lapindromes</h1><div class="content">

<p><i>Lapindrome</i> is defined as a string which when split in the middle, gives two halves having the same characters and same frequency of each character. If there are odd number of characters in the string, we ignore the middle character and check for lapindrome. For example <b><i>gaga</i></b> is a lapindrome, since the two halves <b><i>ga</i></b> and <b><i>ga</i></b> have the same characters with same frequency. Also, <b><i>abccab</i></b>, <b><i>rotor</i></b> and <b><i>xyzxy</i></b> are a few examples of lapindromes. Note that <b><i>abbaab</i></b> is NOT a lapindrome. The two halves contain the same characters but their frequencies do not match. <br/> Your task is simple. Given a string, you need to tell if it is a lapindrome.</br/></p>
<h3>Input:</h3>
<p>First line of input contains a single integer <b>T</b>, the number of test cases.<br/><br />
Each test is a single line containing a string <b>S</b> composed of only lowercase English alphabet.<br/></br/></br/></p>
<h3>Output:</h3>
<p>For each test case, output on a separate line: "YES" if the string is a lapindrome and "NO" if it is not.<br/></br/></p>
<h3>Constraints:</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>2 ≤ |<b>S</b>| ≤ 1000, where |<b>S</b>| denotes the length of <b>S</b></li>
</ul>
<h3>Example:</h3>
<p><b>Input:</b></p>
<pre>
6
gaga
abcde
rotor
xyzxy
abbaab
ababc


</pre><p><b>Output:</b></p>
<pre>
YES
NO
YES
YES
NO
NO

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/tuananh93">tuananh93</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-05-2013</td>
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