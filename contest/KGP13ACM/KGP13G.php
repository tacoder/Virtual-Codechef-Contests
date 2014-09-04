<?php require("../../includes/header.php"); ?><h1>Message Coding</h1><div class="content">
<p>You have a mini number pad which allows you a shortcut mode of typing messages using the digits 0 to 9. Each digit represents a subset of English letters (lowercase only). No letter is represented by more than one digit. An example keypad is given below along with the corresponding letters. Unfortunately there is no representation for blank or any other separator for words.</p>
<p class="MsoNormal"><span lang="PT-BR">0: a  e  u         5:  f p z</span></p>
<p class="MsoNormal"><span lang="PT-BR">1: b  l  v          6:  g q</span></p>
<p class="MsoNormal"><span lang="PT-BR">2: c  m w         7:  h r</span></p>
<p class="MsoNormal"><span lang="PT-BR">3: d  n x          8:  k s               </span></p>
<p class="MsoNormal"><span>4: i o y            9:  j t</span></p>
<p>You have a complete dictionary of words <span>(with lowercase letters only).</span> You may use the keyboard to type a sequence of words. For example, the words “code competition final” is entered as “2 4 3 0 2 4 2 5 0 9 4 9 4 4 3 5 4 3 0 1”. This sequence may correspond to several different word sequences. Some digit sequences may not correspond fully to any word sequence.</p>
<p>
You are required to print the minimum number of words in sequence from the dictionary that <span>covers</span><span> </span>the given input. If the given digit sequence does not correspond to any complete word sequence in the dictionary, output -1.
</p>
<h3>Input</h3>
<p>The first line contains the number of test cases, <b>N </b><span>.</span></p>
<p>For each test case, first line contains an integer <b>K</b> indicating the number of words in the dictionary. Second line contains <b>K</b> words, each with length less than 20. This is followed by 10 lines, with each line containing the following: a digit <b>d</b>, followed by an integer <b>m</b>, followed by <b>m</b> lowercase alphabets (with one space between two characters) indicating the English alphabets represented by the digit <b>d</b>. This is followed by a single line containing an integer <b>n </b>, followed by <b>n</b> integers (each within 0 and 9) denoting an n-digit input sequence to check.</p>
<h3>Output</h3>
<p>For each test case, in the first line, print the case number, followed by a colon, followed by a single space, followed by a single integer representing the minimum number of words in the dictionary that can cover the given digit sequence (the integer should be -1 if the given digit sequence does not correspond to any complete word sequence).</p>
<h3>Constraints</h3>
<p>0 &lt; <b>N</b> &#8804; 3</p>
<p>0 &lt; <b>K</b> &#8804; 10000</p>
<p>0 &#8804; <b>d</b> &#8804; 9</p>
<p>0 &lt; <b>m</b> &#8804; 15</p>
<p>0 &lt; <b>n</b> &#8804; 1000</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
18
am axe exam boy colour dam dot donkey fox new prim prime primeval pry the this theory van
0 3 a b c
1 3 d e f
2 2 g h
3 3 i j y
4 3 l m n
5 3 o p q
6 2 r s
7 2 t u
8 3 v w x
9 2 k z
11 7 2 1 5 6 3 4 1 8 0 4
20
am ant axe boy colour dam dot donkey exam exact fox new prim prime primeval pry the this theory van
0 3 a b c
1 3 d e f
2 2 g h
3 3 i j y
4 3 l m n
5 3 o p q
6 2 r s
7 2 t u
8 3 v w x
9 2 k z
5 2 4 3 0 2

<b>Output:</b>
Case 1: 2
Case 2: -1

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-12-2013</td>
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