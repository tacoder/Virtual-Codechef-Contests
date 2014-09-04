<?php require("../../includes/header.php"); ?><h1>The Legend Lives On!</h1><div class="content">

<p>
<h2>Points:10</h2>
</p>
<p>
Your college teacher was highly impressed by your previous achievement. So now he has given you a new project to work on. If you can make this one into a success, you could be on your way to Rio de Janeiro in Brazil to participate in the global finale of this international technical extravaganza sponsored by Bromhood Brothers, a leading software developer( Now why does it look familiar ?!?).<br />
You are given  set of letters,<br />
and the challenge is to find how many different words can be made from these<br />
letters. This problem is designed to take all the fun out of it by<br />
automating the process.</p>
<h3>
Input:</h3>

<p>Input will be in two parts. The first part will be a dictionary of less than<br />
1000 lines, containing words to be searched for. Each line will contain one<br />
word of up to 7 characters. Each word will be in lower case. The words will<br />
be in alphabetical order. The end of the dictionary will be indicated by a<br />
line consisting of a single `#' character.<br />
</p>
<p>After the dictionary there will be data for several word puzzles, each on a<br />
separate line. Each puzzle line will have from one to 7 lower case letters,<br />
separated by one or more spaces. Your task is to arrange some or all of<br />
these letters to form words in the dictionary. The list of puzzles will be<br />
terminated by a line consisting of a single `#'.</p>
<h3>
<p>Output:<br />
</p></h3>

<p>For each puzzle line in the input, a single line of output should be<br />
produced, containing the number of different words in the dictionary that<br />
can be formed using the letters in the puzzle line.<br />
<br />
Note that each letter may be used only as many times as it appears in the<br />
puzzle line. For instance, the puzzle line `u l l' may produce the word `lul'<br />
but not the word `lull'.
</p>
<p><h3>
Example:</h3>
</p>
<p><b>Input:</b></p>
<pre>
ant
bee
cat
dog
ewe
fly
gnu
#
b e w
b b e e w w
t a n c u g d
#
</pre><p><b><br />
Output:</b></p>
<pre>
0
2
3
</pre><h3></h3>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ankitbabbar">ankitbabbar</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-10-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>