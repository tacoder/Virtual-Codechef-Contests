<?php require("../../includes/header.php"); ?><h1>A Palindromic Game</h1><div class="content">

<p>Recently, doing some research in a far away jungle, the references of an old civilization game have been found. According to those old papers, any number of players can take part. Initially a finite number of distinct words is written and then, every player try to guess what's the  <b>largest number of pairs of words A, B that can be chosen at the same time, such that each pair has the property that either the word AB or BA is palindrome and no word can appear in more than one pair or be paired with itself</b>. The papers say people from that civilization were never good enough to say the exact number, and the game was always defined by choosing as the winner the player who said the closest number to the correct answer and in case of tie, the lowest answer was chosen. But,being such an excellent coder, you don't like that "approximation" answer and you claim you will be always able to say the correct number, no matter how complex the given set of words is. Thus, the ICPC (International Committee for Palindromic Challenges) has prepared several sets for you and if you tell them correct answers for all sets, you will be declared to be the Ultimate Palindromic God (which is, according to the papers, the name that should be given to the first player able to always win the game)</p>
<h3>Input</h3>
<p>The input will contains several test cases. Every test case will start with a number N telling you the size of the set. Then N lines follow, each one with a word of current set, composed just with English alphabet lowercase letters.The input ends with the EOF.</p>
<h3>Output</h3>
<p>For each test case in the input, output a single line with the required answer.<b> You can safely assume the maximum number of pairs there are in the game to be &lt;= 3000.</b></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
  6
  aaababa
  aa
  ababaaa
  baaa
  a
  b
  9
  aabbaabb 
  bbaabbaa
  aa
  bb
  a
  bbaa
  bba
  bab
  ab
  10
  ab
  ba
  aaab
  cbaaa
  aaabc
  xxxcbaaa
  aaabcxxx
  aaa
  a
  b

<b>Output:</b>
  3
  4
  5

<h3>Constraints</h3>
1 &lt;= N &lt;= 1000
1 &lt;= length_of_word &lt;= 1000

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/encoded_admin">encoded_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-02-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, ICON, JAR, JAVA, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PYTH, PYTH 3.1.2, RUBY, SCM guile, SCM qobi, ST, TCL</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>