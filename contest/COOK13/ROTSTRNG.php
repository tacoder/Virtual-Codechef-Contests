<?php require("../../includes/header.php"); ?><h1>Rotate the String</h1><div class="content">

<p align="justify">Did you know that a cluster of bananas can also be called a 'hand' of bananas ? No points for guessing what the individual bananas are called. ya.. 'fingers' :). The monkey from the valley of food is all set to fight for the title 'Dragon Chef' after having a hand of bananas for breakfast. As you know that the judge, master Oogway is always late for the show, the monkey and Po decided to play a game. They took a string of characters and started rotating it. </p>
<p align="justify">A k-rotation on a string takes the trailing k characters of the string and attaches it to the beginning of the string in the same order. For eg. 3-rotation on the string "noodles" results in the string "lesnood". On the given string <b>S</b>, the monkey performs a <b>M</b>-rotation and gives it to Po. Po performs a <b>P</b>-rotation on it and gives back to the monkey. The monkey again performs a <b>M</b>-rotation on it and so on... Though Shifu is getting angry watching the monkey play with Po, he is wondering after how many minimum (non-zero) number of rotations we can get back to the original string <b>S</b>. This can happen after a rotation performed by the monkey or Po. Please find it for him.</p>
<h3>Input</h3>

<p align="justify">First line contains T ( number of test cases, around 10 ). T cases follow. Each case consists of two lines. First line has the string S of length n ( 1 &lt;= n &lt;= 500,000 ), having ('a'-'z' , 'A'-'Z'). Second line contains two integers M P separated by a space ( 1 &lt;= M, P &lt;= n ). Comparisons are case sensitive i.e., 'a' is not equal to 'A'.</p>
<h3>Output</h3>

<p align="justify">For each test case, output the answer in a new line. If its impossible to get back to the original string by performing the rotations as mentioned above, print -1</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
AbcDef
1 2
abcabc
1 1

<b>Output:</b>
4
3
<br />
<b>Explanation</b>
Case 1 :
Monkey : fAbcDe , Po : DefAbc, Monkey : cDefAb , Po : AbcDef

Case 2 :
Monkey : cabcab , Po : bcabca, Monkey : abcabc
</pre><p>
<i>Warning : Large input / output. You may have to use efficient input / output methods if you are using languages with heavy input / output overload. Eg: Prefer using scanf/printf to cin/cout for C/C++ </i></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/flying_ant">flying_ant</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/masked_zorro">masked_zorro</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-08-2011</td>
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