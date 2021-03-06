<?php require("../../includes/header.php"); ?><h1>Book Exercises</h1><div class="content">

<p>Harry is a bright student. To prepare thoroughly for exams, he completes all the exercises in his book! Now that the exams are approaching fast, he is doing book exercises day and night. He writes down and keeps updating the remaining number of exercises on the back cover of each book.</p>
<p>Harry has a lot of books messed on the floor. Therefore, he wants to pile up the books <b>that still have some remaining exercises</b> into a single pile. He will grab the books one-by-one and add the books that still have remaining exercises to the top of the pile.</p>
<p>Whenever he wants to do a book exercise, he will pick the book with the minimum number of remaining exercises from the pile. In order to pick the book, he has to remove all the books above it. Therefore, if there are more than one books with the minimum number of remaining exercises, he will take the one which requires the least number of books to remove. The removed books are returned to the messy floor. After he picks the book, he will do all the remaining exercises and trash the book.</p>
<p>Since number of books is rather large, he needs your help to tell him the number of books he must remove, for picking the book with the minimum number of exercises.</p>
<p>
Note that more than one book can have the same name.
</p>
<h3>Input</h3>
<p>The first line contains a single integer <b>N</b> denoting the number of actions. Then <b>N</b> lines follow. Each line starts with an integer. If the integer is -1, that means Harry wants to do a book exercise. Otherwise, the integer is number of the remaining exercises in the book he grabs next. This is followed by a string denoting the name of the book.</p>
<h3>Output</h3>
<p>For each -1 in the input, output a single line containing the number of books Harry must remove, followed by the name of the book that Harry must pick.</p>
<h3>Constraints</h3>
<p>
1 &lt; <b>N</b> ≤ 1,000,000<br /> 0 ≤ (the number of remaining exercises of each book) &lt; 100,000<br /> The name of each book consists of between 1 and 15 characters 'a' - 'z'.<br /> Whenever he wants to do a book exercise, there is at least one book in the pile.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
6
9 english
6 mathematics
8 geography
-1
3 graphics
-1

<b>Output:</b>
1 mathematics
0 graphics
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vinayak garg">vinayak garg</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-09-2012</td>
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