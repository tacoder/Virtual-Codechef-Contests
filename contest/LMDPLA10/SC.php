<?php require("../../includes/header.php"); ?><h1>Spiral Chess</h1><div class="content">

<p style="text-align:justify;">
The legend says that chess was invented in India; the inventor of the game, Sassi, requested from the Brahman Rai Bhalit a modest payment: 1 grain of wheat for the first square, 2 for the second, 4 for the third, 8 for the fourth, and so on up to the sixty fourth square of the board. The Brahman, being so naive accepted the request and asked his court to make the payment to Sassi. Soon he realized that there was not enough wheat in all India to pay Sassi. Because of that, Rai Bhalit ordered another payment to Sassi based on the game he invented.</p>
<p style="text-align:justify;">
The Brahman proposed the following game to Sassi: "I will give you a sequence of numbers and you have to place them in the chess board in an spiral way. Then, I will give you several rectangles Q<sub>i</sub> inside the board, and for each one of them you have to give me the minimum between the sum of the numbers placed on the black squares in Q<sub>i</sub> and the sum of the numbers placed on the white squares in Q<sub>i</sub>. If you are able to do so, I will give you the sum of the numbers in the whole board in gold coins. If you are not, your head will roll."</p>
<p style="text-align:justify;">
Being really slow to sum many numbers, Sassi requested his son Shah to help him due his outstanding ability to write programs in Whitespace. Nevertheless, Shah was not able to find a good Whitespace compiler in Rai Bhalit's palace so he is asking you to solve this problem with a more sophisticated language.</p>
<p style="text-align:justify;">
The following figure shows the way a 4x4 board is filled with the sequence: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16.
</p>
<p><center><br />
<img border="0" src="http://dl.dropbox.com/u/4372589/3.jpg" alt="check image in http://picasaweb.google.com/anvaysrivastava/Alkhawarizm?authkey=Gv1sRgCKiltti18crPxwE#5522750288106849426" width="230" height="226" /><br />
</center></p>
<p style="text-align:justify;">
Note that every chess board starts with a white square in the top-left corner and the sequence could be composed by any numbers.
</p>
<h3>Input</h3>
<p style="text-align:justify;">
The first line contains an integer T, which specifies the number of test cases. Then, T test case descriptions will follow.</p>
<p style="text-align:justify;">
Each test case will start with a line with one positive integer N, indicating the size of the chess board. The next line will contain N<sup>2</sup> numbers to fill the chess board in the way described before.</p>
<p style="text-align:justify;">
The following line will have a positive integer Q, which specified the number of queries for this test case. Then Q query descriptions will follow.</p>
<p style="text-align:justify;">
Each query is described by a line with four integers R<sub>1</sub>, C<sub>1</sub>, R<sub>2</sub> and C<sub>2</sub>, indicating the corners of a rectangle to be processed, where the pairs (R<sub>1</sub>,C<sub>1</sub>) and (R<sub>2</sub>,C<sub>2</sub>) indicate the tiles at the top-left corner and the bottom-right corner of the rectangle, respectively.</p>
<h3>Output</h3>
<p style="text-align:justify;">
For each input case you must print the string "Case #i:" in a line, where i is the test case number, starting from 1. Then, for each query made for that test case, you must print the result of it in its own line.<br />
You must print a new line after every test case.</p>
<h3>Example</h3>
<pre>
<b>Input</b>
2
2
3 4 1 2
4
0 0 0 0
0 1 0 1
0 0 0 1
0 0 1 1
3
1 2 3 4 5 6 7 8 9
3
0 0 1 1
1 1 2 2
0 0 2 2

<b>Output</b>
Case #1:
0
0
3
4

Case #2:
10
10
20
</pre><h3>Constraints</h3>
<pre>
<ul>
<li>T will be between 1 and 200, inclusive.</li>
<li>N will be between 2 and 100, inclusive.</li>
<li>Each element inside the sequence will be between 1 and 10<sup>4</sup>, inclusive.</li>
<li>Q will be between 1 and 10000, inclusive.</li>
<li>R<sub>1</sub>, C<sub>1</sub>, R<sub>2</sub>, C<sub>2</sub> will be between 0 and N-1, inclusive, for all queries.</li>
<li>R<sub>1</sub> will be lower than or equal to R<sub>2</sub> for each query.</li>
<li>C<sub>1</sub> will be lower than or equal to C<sub>2</sub> for each query.</li>
</ul></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divij">divij</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-09-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 - 1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>