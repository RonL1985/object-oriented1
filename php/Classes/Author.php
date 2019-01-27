<?php



/**
 * Small Cross Section of a author
 *
 * This profile can be considered a small example of what services like GameStop store when profiles are used in GameStop. This can easily be extended to emulate more feature of GameStop.
 *
 * @author Chelsea David <cryan17@cnm.edu
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

	/**
	 * @param Uuid $newauthorId
	 * @param $newAuthorAvatarUrl
	 * @param $newAuthorActivationToken
	 * @param $newAuthorEmail
	 * @throws InvalidArgumentException
	 * @throws RangeException
	 * @throws Exception
	 * @throws TypeError
	 **/

	public function __construct(string $newProfileId,string $newProfileLocation, string $newProfileNickname,string $newProfileEmail) {
		try {
			$this->setauthorId($newAuthorId);
			$this->setAuthorAvatarUrl($newAuthorAvatarUrl);
			$this->setAuthorActivationToken($newAuthorActivationToken);
			$this->setAuthorEmail($newAuthorEmail);

		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw (new $exceptionType($exception->getMessage(), 0, $exception)) ;
		}
	}
	/** accessor method for profile id
	 *
	 * @return Uuid value of profile id
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
		// convert and store the profile id
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
	public function setAuthorAvatarUrln( $newAuthorAvatarUrl) : void {
		try {
			$string = self::validateString($newAuthorAvatarUrl);
		} catch(\InvalidArgumentException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(),0,$exception));
		}
		// convert and store the profile id
		$this-> authorAvatarUrl = $string;
	}