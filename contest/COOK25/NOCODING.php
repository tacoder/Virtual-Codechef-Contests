<?php require("../../includes/header.php"); ?><h1>Code Crazy Minions</h1><div class="content">

<p style="text-align:justify">
Coding in Sprout (a programming language) is very intuitive. Chef is giving his minions a demonstration in Sprout and wants you to<br />
help him determine if they are not too difficult for them.
</p>
<p style="text-align:justify">
A program in Sprout is written using three kinds of instructions.
</p>
<p style="text-align:justify">
<ul>
<li>Load Instruction: Load a value into buffer.</li>
<li>Increment Instruction: Increment the value in buffer.</li>
<li>Print Instruction: Print the value from buffer.</li>
</ul>
</p>
<p style="text-align:justify">
The buffer stores a single integer between 0 and 25, both inclusive. If the value in the buffer is x, the increment instruction<br />
makes the value (x+1), if x &lt; 25. At x = 25 the increment instruction makes the value 0.
</p>
<p style="text-align:justify">
Load Instruction can be used to load any value between 0 and 25 (inclusive) into the buffer.
</p>
<p style="text-align:justify">
Print from the buffer prints a lowercase English character based on the value in the buffer. Precisely, it prints the (x+1)th character<br />
in the alphabet. Thus, for x = 0, 'a' is printed; x = 1, 'b' is printed and so on. For x = 25, 'z' is printed.
</p>
<p style="text-align:justify">
To keep his programs clear, he uses the load instruction only once in the beginning (before printing any character). Then<br />
he proceeds instruction after instruction. A program is simple, if the number of instructions is not more than ELEVEN times the length<br />
of the word that it prints.<br />
Given the word Chef wants his program to print and assuming he will write the shortest code (i.e. use the fewest instructions)<br />
to print it, will the program be simple?
</p>
<h3>Input</h3>
<p style="text-align:justify">
The first Line contains a single number T, the number of test cases.
</p>
<p style="text-align:justify">
Each test case contains 1 word on a line by itself - the word that would be printed by Chef's program.
</p>
<h3>Output</h3>
<p style="text-align:justify">
Assuming Chef writes the shortest code (with minimum instructions) to print the given word, output "YES" if this code is not more than<br />
ELEVEN times the length of the word being printed; "NO" otherwise
</p>
<h3>Constraints</h3>
<p style="text-align:justify">
<pre>1 ≤ T ≤ 100
1 ≤ length of word ≤ 1000
</pre></p>
<h3>Sample Input</h3>
<p style="text-align:justify">
<pre>2
helloworld
mississippi
</pre></p>
<h3>Sample Output</h3>
<p style="text-align:justify">
<pre>NO
YES
</pre></p>
<h3>Explanation</h3>
<p style="text-align:justify">
The optimal program length for mississippi is 112 instructions and that is smaller than 121 (length of 'mississippi' * 11)
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gamabunta">gamabunta</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-08-2012</td>
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