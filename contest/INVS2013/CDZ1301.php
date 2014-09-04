<?php require("../../includes/header.php"); ?><h1>String Power</h1><div class="content">

<p>ALICE and BOB are playing a game with strings. Both of them have a string of length N consisting of lower case characters only.  </p>
<p>A permutation of “abcdefghijklmnopqrstuvwxyz” is given in the input that defines the POWER of the characters (a-z). The position of the character starting from the left defines the POWER of a character. The position of the leftmost character is taken to be 0.</p>
<p>If a character is common to both the strings, it is destroyed. The powers of the leftout characters of each of the strings are added separately.  If a character is repeated, then power of only one such character is added. Person with the string of HIGHER POWER wins.  </p>
<p>ALICE and BOB want to check if you are smart enough to declare the winner in advance!!<br />
Are you ready? ;)
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer T, denoting the length of the conversation, and the string M, denoting a permutation of the string "abcdefghijklmnopqrstuvwxyz" which defines the power of characters. T and M are separated by exactly one space.<br />
The description of T test cases follows.<br />
In each of the test cases, FIRST line contains ALICE’s string and SECOND line contains BOB’s string.
</p>
<p> </p>
<h3>Output</h3>
<p>For each query, output on a separate line the winner of the game as “ALICE” or “BOB” and “TIE” in case of a tie.<br />
Quotes for clarity only.<br />
.</p>
<ul>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>30000</b></li>
<li>SIze of each string &lt;= 100 </li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
wmbqkhasuftlcnerdzoxviypjg
jack
jill
dwarka
moksha
umytissv
hlovhsny

<b>Output:</b>
BOB
ALICE
TIE
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> In the first case both the 'j' are cancelled out then the strength of alice's<br />
string is (6+12+4) 22 and for bob's string is (21+11) 32 therefore BOB is the answer.
</p>
<p><b>Example case 2.</b>In the second test case one 'a' and 'k' are cancelled out the strength of alice's string is (6+16+15+0) 37 and for bob's string is (5+1+18+7) 31 therefore ALICE is the answer.
</p>
<p>NOTE :<b> Use fast Input Output. </b></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tussharsingh13">tussharsingh13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-03-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>