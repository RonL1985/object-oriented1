<?php



/**
 * Small Cross Section of a author
 *
 * This author can be considered a small example of object oriented phase 1 assigment. when author are used in object oriented. This can easily be extended to emulate more feature of object oriented.
 *
 * @author Ronald Luna <ronaldluna1@gmail.com
 * @version 1
 **/
class author {
	/**
	 * id for this author; this is the primary key
	 * @var Uuid $authorId
	 **/
	private $authorId;
	/** url of the author that left this question
	 * @var string $authorAvatarUrl
	 **/
	private $authorAvatarUrl;
	/** Nickname of this author/user
	 * @var string $authorActivationToken
	 **/
	private $authorActivationToken;
	/**
	 * Email linked to this author,
	 * @var string $authorEmail
	 **/
	private $authorEmail;
	/** Username of this author/username
	 * @var string $authorUsername
	 **/
	private $authorUsername;

	/**
	 * @param Uuid $newauthorId
	 * @param $newAuthorAvatarUrl
	 * @param $newAuthorActivationToken
	 * @param $newAuthorEmail
	 * @param $newauthorUsername
	 * @throws InvalidArgumentException
	 * @throws RangeException
	 * @throws Exception
	 * @throws TypeError
	 **/

	public function __construct(string $newAuthorId,string $newAuthorAvatarUrl, string $newAuthorActivationToken,string $newAuthorEmail) {
		try {
			$this->setauthorId($newAuthorId);
			$this->setAuthorAvatarUrl($newAuthorAvatarUrl);
			$this->setAuthorActivationToken($newAuthorActivationToken);
			$this->setAuthorEmail($newAuthorEmail);
			$this->setAuthorUsername($newAuthorUsername);

		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw (new $exceptionType($exception->getMessage(), 0, $exception)) ;
		}
	}
	/** accessor method for author id
	 *
	 * @return Uuid value of author id
	 *
	 **/
	public function getAuthorId() : Uuid {
		return($this->authorId);
	}
	/**
	 * mutator method for author id
	 *
	 * @param Uuid/string $newAuthorId new value of author id
	 * @throws \RangeExeption if $newAuthorId is n
	 * @throws \TypeError if $newAuthorId is not a Uuid
	 **/
	public function setAuthorId( $newAuthorId) : void {
		try {
			$uuid = self ::validateUuid($newAuthorId);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
		// convert and store the author id
		$this->authorId = $Uuid;
	}

	/**
	 * accessor method for author Avatar Url
	 *
	 * @return string value of author Avatar Url
	 **/
	public function getAuthorAvatarUrl() : string {
		return($this->authorAvatarUrl);
	}
	/**
	 * mutator method for author Avatar Url
	 *
	 * @param string | string $newAuthorAvatarUrl new value of author Avatar Url
	 * @throws \ InvalidArgumentException if $newAuthorAvatarUrl is not a string or insecure
	 * @throws \TypeError if @newAuthorAvatarUrl is not an string
	 **/
	public function setAuthorAvatarUrl( $newAuthorAvatarUrl) : void {
		try {
			$string = self::validateString($newAuthorAvatarUrl);
		} catch(\InvalidArgumentException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(),0,$exception));
		}
		// convert and store the author id
		$this-> authorAvatarUrl = $string;
	}